<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class OrderController extends Controller
{
    //
    public function newOrder(Request $request){
        $id_order = now()->timestamp;
        $data = [
            'id_order' => $id_order,
            'id_user' => $request->id_user,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'datetime' => $request->datetime,
            'status' => "1"
        ];
       
        $id = DB::table('tb_order')->Insert( $data);
        if ($id > 0){
         
            foreach($request->list  as $i => $v){
                $data2 = [
                    'id_order' => $id_order,
                    'name' =>  $v['name'],
                    'number' =>  $v['number'],
                    'image' =>  $v['image'],
                    'price' =>  $v['price']
                ];
                DB::table('listorder')->Insert( $data2);
            }
            return response()->json(['id_order' => $id_order, 'statusCode' => '200', 'msg' => 'Thành cong']);
        }
        else  return response()->json(['statusCode' => '400', 'msg' => 'That bai']);
    }

    public function getOrder(Request $request){
       $list = DB::select("select * from tb_order where id_user ='".$request->id_user."'");
       $data = [];
       foreach($list as $item){
             $listProduct = DB::select("select * from listorder where id_order ='".$item->id_order."'");
        
            $data[] = [
                'id_order' => $item->id_order,
                'name' => $item->name,
                'address' => $item->address,
                'phone' => $item->phone,
                'status'=>$item->status,
                'datetime'=>$item->datetime,
                'listProduct' => $listProduct
            ];
       }

       return response()->json(['data' => $data, 'statusCode' => '200', 'msg' => 'Thành cong']);
    }

    public function updateStatus(Request $request){
        $id = DB::select("update tb_order 
                          set status ='".$request->status."' where id_order ='".$request->id_order."'");
        return response()->json(['statusCode' => '200', 'msg' => 'Hủy đặt hàng thành công']);
    }
}
