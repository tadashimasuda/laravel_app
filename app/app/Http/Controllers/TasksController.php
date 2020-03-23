<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TasksController extends Controller
{
    //
    public function index() //追加
   {
       $tasks = Task::all(); 
       return view('top',['tasks' => $tasks]);
   }
   public function top_login() //追加
   {
       $tasks = Task::all(); 
       return view('top_login',['tasks' => $tasks]);
   }
   public function mypage() //追加
   {
       $tasks = Task::all(); 
       return view('mypage',['tasks' => $tasks]);
   }
   public function edit($task_id){
       $task = Task::where('task_id',$task_id)->first();
       return view('edit',['task'=>$task]);
   }
   public function store(Request $request){
        $img = Image::canvas(218,157,'#FFF502');
        $img->rectangle(0, 0,  218,157, function ($draw) {
            $draw->background('#FFF502');
            $draw->border(12, '#707070');
        });
        $save_path = public_path('image/samplea1aea.jpg');
        $img->save($save_path);
        return view('test',['request'=>$request]);
}

}
