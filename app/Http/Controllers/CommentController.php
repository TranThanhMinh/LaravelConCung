<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //
    public function insert(Request $request)
    {
        $id_comment = $request->id_comment;
        if ($id_comment == "0") {
            $id_comment = now()->timestamp;
            $data = [
                'id_comment' => $id_comment,
                'id' => $request->id,
                'id_user' => $request->id_user,
                'name_user' => $request->name_user,
                'text_comment' => $request->text_comment,
                'date_time' => $request->date_time
            ];
            $id = DB::table('comment')->Insert( $data);
            if ($id > 0)
                return response()->json(['id_comment' => $id_comment, 'statusCode' => '200', 'msg' => 'Thành cong']);
            else  return response()->json(['statusCode' => '400', 'msg' => 'That bai']);
        }else{
            $id_reply = now()->timestamp;
            $data = [
                'id_comment' => $id_comment,
                'id_reply' => $id_reply,
                'id_user' => $request->id_user,
                'name_user' => $request->name_user,
                'text_comment' => $request->text_comment,
                'date_time' => $request->date_time
            ];
            $id = DB::table('reply_comment')->Insert($data);
            if ($id > 0)
                return response()->json(['id_comment' => $id_reply, 'statusCode' => '201', 'msg' => 'Thành cong']);
            else  return response()->json(['statusCode' => '401', 'msg' => 'That bai']);
        }



    }
}
