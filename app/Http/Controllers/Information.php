<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Information extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getData()
    {
        $listProduct = DB::table('product')->simplePaginate(5);
        return view('information', compact('listProduct'),['title'=>'Thông tin']);
    }


    function fetch(Request $request)
      {
          if($request->ajax()){
              $listProduct = DB::table('product')->simplePaginate(5);
              return view('listproduct', compact('listProduct'))->render();
          }else print_r("aa");

      }
}
