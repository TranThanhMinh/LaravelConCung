<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //

    public function index(){
        $data = Category::all();
        return response()->json(['data'=>$data,'statusCode'=>'200','msg'=>'Thành cong']);
    }

    public function typeCategory(Request $request )
    {
        $data = DB::select("SELECT * FROM category_page where id_category ='".$request->id."'");
        $product = DB::select("SELECT * FROM product where id_category ='".$request->id."'");
        return response()->json(['data'=>$data,'product'=>$product,'statusCode'=>'200','msg'=>'Thành cong']);
    }
}