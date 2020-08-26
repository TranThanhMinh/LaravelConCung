<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        if(session('user') != ""){
            $listProduct = DB::select("select * from product");
            return view('home', ['listProduct' => $listProduct,'title'=>'Trang chủ']);
        }else {

            return view('login',['title'=>'Trang chủ']);
        }


    }
}
