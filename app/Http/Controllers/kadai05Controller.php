<?php

namespace App\Http\Controllers;

use App\Http\Requests\kadai05Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class kadai05Controller extends Controller
{
    //
    public function index() {
        // 省略
        return view('kadai05_1');
    }
    public function post(kadai05Request $request) {
        $file = $request->file( "image_file" );
        $result = [];
        // 送信したファイル名の取得
        $result[ "name" ] = $file->getClientOriginalName();
        // アップロードされたファイルの保存
        $result[ "path" ] = Storage::disk( "public" )->put( "images", $file );
        // FTPでのファイルをアップロード
        Storage::disk("ftp")->put( "public_html/se2a03", $file );
        return view( "kadai05_2", compact( "result" ) );
    }
}
