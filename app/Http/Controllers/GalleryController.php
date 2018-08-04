<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function store(Request $request){
        $destinationPath = base_path().'/public/images';
        $file = Input::file('file');

        if($file){
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $file->move($destinationPath, $fileName);
            $data = array(
                'imagePath' => $fileName,
                'title' => $request->input('photoTitle')
            );
            if(DB::table('galleries')->insert($data)){
                return redirect()->back()->with('alert', 'Successfully Save!');
            }else{
                //return redirect('/resources')->with('error', 'Something wrong please try again.');
            }
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('galleries')->where('id', '=', $id)->delete();
    }
}
