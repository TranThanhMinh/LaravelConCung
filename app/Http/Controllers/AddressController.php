<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    //

    public function index(Request $request)
    {
        $data = DB::select("select * from tb_address where id_user ='" . $request->get('id_user') . "'");
        return response()->json(['data' => $data]);
    }


    public function updateAddress(Request $request)
    {
        $data = [
            'id' => $request->id,
            'id_user' => $request->id_user,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'type' => $request->type
        ];

        if ($request->type == 1 && $request->type2 == 1) {
            $data2 = [
                'id' => $request->id2,
                'type' => "0"
            ];
            DB::table('tb_address')->updateOrInsert(['id' => $request->id2], $data2);
        }

        $id = DB::table('tb_address')->updateOrInsert(['id' => $request->id], $data);

        if ($id > 0)
            return response()->json(['data'=>$id,'statusCode'=>'200','msg'=>'Success']);
        else    return response()->json(['data'=>$id,'statusCode'=>'401','msg'=>'Error']);
    }
}
