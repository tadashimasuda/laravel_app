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
        //storage_pathを通すとできない
        //理想系
        $path = public_path('image/sample.jpg');
        $img = Image::make($path);
        $img->resize(500, 500);
        $save_path = public_path('image/sampleaaa.jpg');
        $img->save($save_path);
        return view('test',['request'=>$request]);
}

}
