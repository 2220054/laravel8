<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sample05Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Sample05Controller extends Controller

{
    public function index()
    {
        // 省略
        return view('sample05_1');
    }

    public function post(Sample05Request $request)
    {
        $file = $request->file("image_file");
        $result = [];
        // 送信したファイル名の取得
        $result["name"] = $file->getClientOriginalName();
        // アップロードされたファイルの保存
        $result["path"] = Storage::disk("public")->put("images", $file);
        // FTPでのファイルをアップロード
        Storage::disk("ftp")->put("public_html/se2a18", $file);
        return view("sample05_2", compact("result"));
    }
}
