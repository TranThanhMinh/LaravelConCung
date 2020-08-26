<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //g
    public function getShop(){
        $data = DB::select('SELECT * FROM tb_shop');
        return response()->json(['data'=>$data,'statusCode' => '200', 'msg' => 'Thành cong']);
    }
}
