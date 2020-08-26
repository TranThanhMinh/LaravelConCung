<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    //
    protected $table = 'trademark';
    protected $fillable = ['id_trademark', 'name_trademark'];
    public $timestamps = true;
}
