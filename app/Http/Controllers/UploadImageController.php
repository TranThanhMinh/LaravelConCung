<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadImageController extends Controller
{
    //
    public function index(){
        return view('upload_image',['title'=>"Upload"]);
    }

    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function  imageUpload(Request $request){
        $fileName  = "images/".$request->nameImage.".png";
        $path = $request->file('photo')->move(public_path('images'), $fileName);
        $photoPath = url('/'.$fileName);
        $data = [
            'id_comment'=>$request->idComment,
            'image' => $photoPath
        ];
        DB::table('image_comment')->Insert($data);

        return response()->json(['url'=>$photoPath,'success'=>200],200);
    }
}
