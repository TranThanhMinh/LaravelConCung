<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbUser extends Model
{
    //

    protected $table = 'tbUser';

    protected $primaryKey = 'id_user';

    protected $fillable = ['id_user', 'name','gender','age','address'];

    public $timestamps = true;
}
