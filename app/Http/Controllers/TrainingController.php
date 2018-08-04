<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TrainingController extends Controller
{
    public function store(Request $request){
        $destinationPath = base_path().'/public/images';
        $file = Input::file('file');

        if($file){
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $file->move($destinationPath, $fileName);
            $data = array(
                'title' => $request->input('trainingTitle'),
                'description' => $request->input('trainingDesc'),
                'attachment' => $fileName
            );

            if(DB::table('trainings')->insert($data)){
                return redirect()->back()->with('alert', 'Successfully Save!');
            }else{
                //return redirect('/resources')->with('error', 'Something wrong please try again.');
            }
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('editTrainingTitle');
        $description = $request->input('editTrainingDesc');

        $destinationPath = base_path().'/public/images';
        $file = Input::file('file');

        if($file){
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $file->move($destinationPath, $fileName);

            if(DB::table('trainings')
                ->where('id', $id)
                ->update(['title' => $title, 'description' => $description, 'attachment' => $fileName])){
                return redirect()->back()->with('alert', 'Successfully Updated!');
            }else{
                //return redirect('/resources')->with('error', 'Something wrong please try again.');
            }
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        DB::table('trainings')->where('id', '=', $id)->delete();
    }
}
