<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    //
    protected $table = 'tb_shop'; 
	protected $fillable = ['id_shop', 'address']; 
	public $timestamps = true; 
}
