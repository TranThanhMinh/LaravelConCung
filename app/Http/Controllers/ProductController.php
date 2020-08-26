<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function Allproduct(){
        $product = Product::all();
    //  $data = DB::table('tb_product');
        return Datatables::of($product);
    }
}
