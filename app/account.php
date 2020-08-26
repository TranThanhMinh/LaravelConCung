<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    //

    protected $table ="tb_account";
    protected $fillable=['id_user','password'];
    public $timestamps = true;
}
