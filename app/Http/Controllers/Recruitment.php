<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Recruitment extends Controller
{
    //



    public function index(){
        $data = \App\recruitment::all();
       // return response()->json($data);
        return response()->json(['data'=>$data]);
    }

   //trang tuyển dụng
    public function recruitment(){
        return view('recruitment',['title'=>'Tuyển dụng']);
    }

    //thêm hoặc sủa thồn tin người tuyển dụng
    public function addOrEdit(Request $request){
                $data = [
                    'name' => $request->name,
                    'postion' => $request->position,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'language' => $request->language
                ];
                $id = DB::table('recruitment')->updateOrInsert(['id' => $request->id], $data);
                if ($id > 0)
                    return   response()->json(array(
                        "statusCode" => 200
                    ));
                else  return   response()->json(array(
                    "statusCode" => 401
                ));
    }

    //xóa thông tin người tuyển dụng
    public function delete(Request $request){
        if($request->ajax()) {
            $data = array(
                'id' => $request->get('id'),

            );
            $id = DB::table('recruitment')->delete( $data);
            if ($id > 0)
                return json_encode(array(
                    "statusCode" => 2000
                ));
            else  return json_encode(array(
                "statusCode" => 2001));

        }
    }

    //tìm kiêm theo vị trí
    function searchPosition(Request $request){
        $list = DB::select("select * from recruitment where postion = '$request->search'");
        if(count($list) > 0)
         return response()->json(['data'=>$list,'statusCode'=>'200','msg'=>'Thành cong']);

    }
}
