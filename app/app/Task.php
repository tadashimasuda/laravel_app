<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Task extends Model
{
    //
    protected $Task = 'task';

    //task追加
    public function addTask($request,$save_path){
        $task=new Task();
        $task->category_id=$request->categoryId;
        //Authでuser情報取得　（今は仮）
        $task->user_id = rand(0,1000);
        $task->content = $request->text;
        $task->imgpath=$save_path;
        $task->done=0;
        $task->good=0;
        $task->save();
    }
    public function updateTask($request,$save_path){
       

        $task = Task::where('task_id',$request->task_id)->update(['content' => $request->text ,'imgpath'=>$save_path]);
        
        // $task->save();
    }
    
}
