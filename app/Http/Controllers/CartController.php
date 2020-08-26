<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getListCart(){
        $list = DB::table('cart')
            ->join('tb_product', 'cart.id', '=', 'tb_product.id')
            ->join('tb_account', 'tb_account.id_user', '=', 'cart.id_user')
            ->select('tb_product.id', 'tb_product.name', 'tb_product.price', 'tb_product.image', 'cart.number')
            ->where('cart.id_user',session('user'))
            ->paginate(4);

        $total = DB::select("SELECT SUM(tb_product.price) as total  FROM cart
                           INNER JOIN tb_product on cart.id = tb_product.id
                           INNER JOIN tb_account ON tb_account.id_user = cart.id_user
                           WHERE cart.id_user = '".session('user')."'");
        return view('cart',['list'=>$list,'title'=>'Giỏ hàng','total' =>$total]);
    }


    function fetch(Request $request){
        if($request->ajax()){
            $list = DB::table('cart')
                ->join('tb_product', 'cart.id', '=', 'tb_product.id')
                ->join('tb_account', 'tb_account.id_user', '=', 'cart.id_user')
                ->select('tb_product.id', 'tb_product.name', 'tb_product.price', 'tb_product.image', 'cart.number')
                ->where('cart.id_user',session('user'))
                ->simplePaginate(4);

            $total = DB::select("SELECT SUM(tb_product.price) as total  FROM cart
                           INNER JOIN tb_product on cart.id = tb_product.id
                           INNER JOIN tb_account ON tb_account.id_user = cart.id_user
                           WHERE cart.id_user = '".session('user')."'");

          return view('listcart',['list'=>$list,'title'=>'Giỏ hàng','total' =>$total]);
        }

    }


}
