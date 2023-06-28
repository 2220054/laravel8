<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    use HasFactory;
    use SoftDeletes; // 論理削除の場合

    protected $table = 'articles'; // テーブル名とモデル名の命名規則を守っている場合は、テーブル名の指定は省略できます。


}
