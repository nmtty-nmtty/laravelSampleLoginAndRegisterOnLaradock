<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // セッションに保存してあるデータを用いて、ログインユーザーに紐づくタスクデータのみを取得
        $loginedModel = session('loginedModel');
        $task = new Task;
        $models = $task->findByCustomerId($loginedModel->id);
        return view('todo.index', compact('models'));
    }

    public function create(Request $request)
    {
        $loginedModel = session('loginedModel');
        $task = new Task;

        $loginedUserId = $loginedModel->id;
        // セッションに保存してあるユーザIDを追加し、ログインユーザーに紐づくデータを登録
        $request->merge(['customer_id' => $loginedUserId]);
        $form = $request->all();
        $task->create($form);

        // セッションに保存してあるデータを用いて、ログインユーザーに紐づくタスクデータのみを取得
        $models = $task->findByCustomerId($loginedUserId);
        return view('todo.index', compact('models'));
    }

    public function delete($id)
    {
        $task = Task::find($id);

        // タスクの主キーで削除
        $task->delete();

        // 直前の画面に遷移
        return redirect()->back();
    }

    public function update($id)
    {
        $task = Task::find($id);

        $complete_flg = $task->complete_flg;

        // complete_flgを反転させて更新
        $task->update(['complete_flg' => !$complete_flg]);

        // 直前の画面に遷移
        return redirect()->back();
    }
}
