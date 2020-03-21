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
}
