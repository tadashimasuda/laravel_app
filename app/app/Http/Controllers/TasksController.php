<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TasksController extends Controller
{
    //
    public function index() //追加
    {
        //topapgeのタスク
        //リレーションでtasksとuserを一致してるのを返す
        $tasks =Task::with('user')->get();
        return view('top', ['tasks' => $tasks]);
    }
    public function top_login() //追加
    {
        $tasks =Task::with('user')->get();
        return view('top_login', ['tasks' => $tasks]);
    }
    public function mypage() //追加
    {
        //会員情報と一致するもの
        $userId = Auth::id();
        $user = Auth::user(); //会員情報
        $tasks = new Task();
        list($task,$acvCount,$count)=$tasks->getTask($userId);
        if($acvCount != 0){
            $percent = $acvCount/$count * 100;
        }else{
            $percent=0;
        }        
        return view('mypage', ['tasks' => $task,'percent'=>$percent,'user' =>$user]);
    }
    public function edit($task_id)
    {
        //編集するデータの取り出し
        $task = Task::where('task_id', $task_id)->first();
        return view('edit', ['task' => $task]);
    }
    //画像生成関数
    private static function makeImg($text)
    {
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
        $path = 'image/' . date('Y-m-d H:m:s') . '.jpg';
        $save = public_path($path);
        $img->save($save);

        return $path;
    }

    public function store(Request $request, Task $task)
    {
        //user情報も登録する
        $path = self::makeImg($request->text);
        $userId = Auth::id();
        $task->addTask($request,$path,$userId);
        return redirect('/mypage');
    }

    public function update(Request $request, Task $task)
    {   //画像を生成してパスを取得
        $path = self::makeImg($request->text);
        $task->updateTask($request, $path);
        return redirect('/');
    }
    //完了画像生成
    private static function achieveImg($request,Task $task){
        //画像のパスを持ってくる　idで一致
        $path = $task->achieveImg($request->task_id);
        //保存
        //return save_path
    }

    public function achieve(Request $request){
        //dbから画像パスを取得
        $task = new Task();
        $reqTask=$task->getPath($request);
        $imgpath = $reqTask->imgpath;
        //fileから画像を取得
        $path = public_path($imgpath);
        $img=Image::make($path);
        //フィルターかける　暗くする　角度つけた文字列をかける
        $img->brightness(-50);
        $img->text('Completed', 115, 100, function ($font) {
            $font->file('fonts/SawarabiGothic-Regular.ttf');
            $font->size(50);
            $font->align('center');
            $font->color('#FF0000');
            $font->angle(30);  
        });
        $path = 'image/' . date('Y-m-d H:m:s') . '.jpg';
        $save = public_path($path);
        //save
        $img->save($save);
        //db保存
        $task->achieveTask($request, $path);
        return redirect('/mypage');
    }
    public function create(){
        return view('/create');
    }
}
