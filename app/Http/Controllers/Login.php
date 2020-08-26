<?php

namespace App\Http\Controllers;

use App\account;
use App\User_TB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Login extends Controller
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

    public function login(){
       $data = account::where('id_user','1')->first();
       // $data = account::all();

        return  401;
    }

    public function show($id){
        return  view('show',['name'=>$id,'id'=>'1234']);
        //return ['name'=>$id];
    }


    public function loginPhone(Request $request){
        $user = DB::select("select * from user where  id_user ='".$request->get('id_user')."'");
        if (count($user) > 0) {
            return response()->json(['user'=>$user,'statusCode'=>'200','msg'=>'success']);
        }else {
            return response()->json(['statusCode'=>'201','msg'=>'error']);
        }

    }
}
