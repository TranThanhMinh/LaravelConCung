<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recruitment extends Model
{
    //
    protected $table ="recruitment";
    protected $fillable =['name','postion','phone','email','language'];
    public $timestamps = true;
}
