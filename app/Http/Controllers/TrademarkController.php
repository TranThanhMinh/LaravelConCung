<?php

namespace App\Http\Controllers;

use App\Trademark;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    //

    public function index(){
        $data = Trademark::all();
        return response()->json(['data'=>$data,'statusCode'=>'200','msg'=>'Thành cong']);
    }
}
