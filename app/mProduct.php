<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mProduct extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['id', 'name', 'price','image','id_promotion','description','id_comment','id_category'];
    public $timestamps = true;
}
