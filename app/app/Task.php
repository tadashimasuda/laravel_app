<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;

class Task extends Model
{
    //
    protected $Task = 'task';

    //task追加
    public function addTask($request, $save_path, $userId)
    {
        $task = new Task();
        $task->category_id = $request->categoryId;
        //Authでuser情報取得　（今は仮）
        $task->user_id = $userId;
        $task->content = $request->text;
        $task->imgpath = $save_path;
        $task->done = 0;
        $task->good = 0;
        $task->save();
    }
    public function updateTask($request, $save_path)
    {
        $task = Task::where('task_id', $request->task_id)->update(['content' => $request->text, 'imgpath' => $save_path]);
    }
    public function achieveTask($request, $imgpath)
    {
        //update() imgpath,update_at,doneの更新→redirect()
        $task = Task::where('task_id', $request->task_id)->update(['imgpath' => $imgpath, 'done' => 1]);
    }
    public function getPath($request)
    {
        //task_idが一致するものを取得
        return $this->where('task_id', $request->task_id)->first();
    }

    public function getTask($userId)
    {
        $task =  $this->where('user_id', $userId)->get();
        $acvCount = $this->where('user_id', $userId)->where('done', '==', 1)->count();
        $count = $this->where('user_id', $userId)->count();
        return [$task, $acvCount, $count];
    }
    public function randTask()
    {
        //データが増えてきたらランダムにする
        $task =$this->all();
        return $task;
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
