<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id_news', 'title_news','descriptipn','image'];
    public $timestamps = true;
}
