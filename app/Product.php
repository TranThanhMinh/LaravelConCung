<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('image');
            $table->integer('id_promotion');
            $table->string('description');
            $table->integer('id_comment');
            $table->integer('id_category');
            $table->integer('id_trademark');
        });
    }
}
