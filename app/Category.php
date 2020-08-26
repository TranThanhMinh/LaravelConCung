<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = ['id_category', 'name_category', 'image_category'];
    public $timestamps = true;
}
