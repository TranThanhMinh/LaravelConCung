<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_TB extends Model
{
    //
    protected $table = 'user';
    protected $fillable = ['id_user', 'pass', 'name_user','gender','address'];
	public $timestamps = true;
}
