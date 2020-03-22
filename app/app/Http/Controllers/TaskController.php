<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
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
}
