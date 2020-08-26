<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'tb_address';
    protected $fillable = ['id', 'id_user','address','type'];
    public $timestamps = true;
}
