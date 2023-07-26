<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thumbnail extends Model
{
    use HasFactory;
    use SoftDeletes; // 論理削除の場合

    protected $table = "thumbnails";

    public static $rules = [
        "image" => ["image"],
    ];

    // エラーメッセージ
    public static $messages = [
        "image.image" => "画像をアップロードしてください",
    ];

}
