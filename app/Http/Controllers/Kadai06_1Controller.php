<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;
//課題10
use App\Models\Thumbnail;
use Storage;

class Kadai06_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::get();
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);


        return view(" kadai06_1 ", compact("articles"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("kadai08_1");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->session()->regenerateToken();
        $articleDao = new Article();
        $this->validate($request, $articleDao::$rules, $articleDao::$messages);

        $thumbnailDao = new Thumbnail();
        $this->validate($request, $thumbnailDao::$rules, $thumbnailDao::$messages);

        $articleDao->title = $request->input("title");
        $articleDao->body = $request->input("body");

        $image = null;
        if($request->has("image")){
            $file = $request->file("image");
            $image = Storage::disk("public")->put("images",$file);
            $thumbnailDao->name = basename($image);
        }

        DB::transaction(function () use ($articleDao, $thumbnailDao, $image) {
            $articleDao->save();

            if($image){
                $thumbnailDao->article_id = $articleDao->id;
                $thumbnailDao->save();
            }
        });

        return redirect()->route("kadai06_1.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::find($id);
        return view(" kadai07_1 ", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::find($id);
        return view("kadai09_1", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->session()->regenerateToken();

        $articleDao = new Article();
        $this->validate($request, $articleDao::$rules, $articleDao::$messages);
        $thumbnailDao = new Thumbnail();
        $this->validate($request, $thumbnailDao::$rules, $thumbnailDao::$messages);

        $image = null;
        if($request->has("image")){
            $file = $request->file("image");
            $image = Storage::disk("public")->put("images",$file);
            $thumbnailDao->name = basename($image);
        }

        DB::transaction(function () use ($articleDao, $request, $id,$thumbnailDao,$image) {
            $article = $articleDao->find($id);
            $article->title = $request->title;
            $article->body = $request->body;
            $article->save();

            if($image){
                $thumbnailDao->article_id = $article->id;
                $thumbnailDao->save();
            }

        });
        return redirect()->route("kadai06_1.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $articleDao = new Article();
        $thumbnailDao = new Thumbnail();

        $thumbnails = $thumbnailDao->where("article_id", $id)->get();
        $thumbnailIds = [];

        foreach($thumbnails as $thumbnail){
            $thumbnailIds[] = $thumbnail->id;
        }

        DB::transaction(function () use ($articleDao,$thumbnailDao, $id,$thumbnailIds) {
            $articleDao->destroy($id);
            $thumbnailDao->destroy($thumbnailIds);
        });
        return redirect()->route("kadai06_1.index");
    }
}
