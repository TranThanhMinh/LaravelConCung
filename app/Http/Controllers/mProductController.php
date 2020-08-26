<?php

namespace App\Http\Controllers;

use App\mProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mProductController extends Controller
{
    //

    public function index(){
        $data = mProduct::all();
        return response()->json(['data'=>$data,'statusCode'=>'200','msg'=>'Thành cong']);
    }

    public function getProduct(Request $request){
        $data = DB::select("select * from product where id = '".$request->get('id')."'");
        foreach ($data as $item){
            $promotion = DB::select("select * from promotion where id_promotion = '".$item->id_promotion."'");
        }
        return response()->json(['data'=>$data,'promotion'=>$promotion,'statusCode'=>'200','msg'=>'Thành cong'] );
    }

    public function  getComment(Request $request){
        $comment = DB::table('comment')
            ->where('comment.id', $request->get('id'))
            ->get();
            $data = [];
            foreach ($comment  as $item)
            {
                $image = DB::table('image_comment')
                    ->where('image_comment.id_comment',  $item->id_comment)
                    ->get();

                $reply = DB::table('reply_comment')
                    ->where('reply_comment.id_comment',  $item->id_comment)
                    ->get();

              //get reply comment
                $data2 = [];
                foreach ($reply  as $item2)
                {
                    $image2 = DB::table('image_comment')
                        ->where('image_comment.id_comment',  $item2->id_reply)
                        ->get();

                    $data2[] = [
                        'id_reply' => $item2->id_reply,
                        'id_comment' => $item2->id_comment,
                        'name_user' => $item2->name_user,
                        'text_comment' => $item2->text_comment,
                        'date_time' => $item2->date_time,
                        'image' => $image2,
                    ];

                }

                $data[] = [
                    'id_comment' => $item->id_comment,
                    'name_user' => $item->name_user,
                    'text_comment' => $item->text_comment,
                    'date_time' => $item->date_time,
                    'image' => $image,
                    'reply' => $data2
                ];
            }

        return response()->json(['comment'=>$data,'statusCode'=>'200','msg'=>'Thành cong'] );
    }
}
