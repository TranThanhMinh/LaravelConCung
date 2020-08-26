<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailProduct extends Controller
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

    public function toDetailProduct($id)
    {
        $detail = DB::select("select * from product where id = '".$id ."'");
        return view('detailproduct',['detail'=>$detail,'title'=>'Đăng nhập']);
    }
}
