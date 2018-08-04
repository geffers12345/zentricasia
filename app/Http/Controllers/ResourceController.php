<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ResourceController extends Controller
{
    public function store(Request $request){
        $destinationPath = base_path().'/public/documents';
        $file = Input::file('resourcesAttach');

        if($file){
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $file->move($destinationPath, $fileName);
            $data = array(
                'title' => $request->input('resourcesTitle'),
                'description' => $request->input('resourcesDesc'),
                'attachment' => $fileName
            );
            if(DB::table('resources')->insert($data)){
                return redirect()->back()->with('alert', 'Successfully Save!');
            }else{
                //return redirect('/resources')->with('error', 'Something wrong please try again.');
            }
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');

        DB::table('resources')
            ->where('id', $id)
            ->update(['title' => $title, 'description' => $description]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('resources')->where('id', '=', $id)->delete();
    }
}
