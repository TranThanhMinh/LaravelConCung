<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{

    public function index(){
        return view('login', ['errors' => '','title'=>'Đăng nhập']);
    }

    public function login(Request $request)
    {
    /*  if($request->ajax()){
          $data = account::where('id_user',$request->input('username'))->first();
          return  response()->json($data);

      }*/
         $data = DB::select("select * from tb_account where id_user ='" . $request->input('username') . "' and password='" . $request->input('password') . "'");

        if (count($data) > 0) {
            $listProduct = DB::select("select * from product");
            $request->session()->put("user",$request->input('username'));
            $request->session()->put("pass",$request->input('password'));
            return view('home', ['listProduct' => $listProduct,'title'=>'Trang chủ']);
       }
        else {
            $request->session()->put("user","1");
            $request->session()->put("pass","1");
            $errors = 'Tài khoản hoặc mật khẩu không đúng?';
            return view('login', ['errors' => $errors,'title'=>'Đăng nhập']);
        }


    }

    public function addUser(Request $request){
        if($request->input('password') == $request->input('password2'))
        {
            DB::insert('insert into tb_account (id_user, password) values (?, ?)',
                [$request->input('username'), $request->input('password')]);
            return view('login',['title'=>'Đăng nhập']);
        } else return view('register',['title'=>'Đăng ký']);

    }
}
