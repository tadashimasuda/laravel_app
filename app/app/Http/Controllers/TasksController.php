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
        return view('top', ['tasks' => $tasks]);
    }
    public function top_login() //追加
    {
        $tasks = Task::all();
        return view('top_login', ['tasks' => $tasks]);
    }
    public function mypage() //追加
    {
        //会員データと一致するもの　条件
        $tasks = Task::all();
        return view('mypage', ['tasks' => $tasks]);
    }
    public function edit($task_id)
    {
        $task = Task::where('task_id', $task_id)->first();
        return view('edit', ['task' => $task]);
    }
    //画像生成関数
    private static function makeImg($text){
        $img = Image::canvas(218, 157, '#000');
        $img->rectangle(0, 0,  218, 157, function ($draw) {
                 $draw->background('#FFF502');
                 $draw->border(12, '#707070');
             });
        $img->text($text, 100, 100, function ($font) {
            $font->file('fonts/SawarabiGothic-Regular.ttf');
            $font->size(10);
            $font->align('center');
            $font->color('#000');
        });
        $save_path = public_path('image/'.date('Y-m-d H:m:s').'.jpg');
        $img->save($save_path);

        return $save_path;
    }

    public function store(Request $request,Task $task)
    {
        $path = self::makeImg($request->text);
        
        $task->addTask($request,$path);        
        
        return redirect('/');
    }
    

    public function update(Request $request,Task $task){
        //where句   where('task_id',$request->task_id)->get();
        
        
        $path =self:: makeImg($request->text);
        $task->updateTask($request,$path);
        return redirect('/');
        
    }
}
