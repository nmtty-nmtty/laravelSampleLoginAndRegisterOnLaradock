<?php

namespace App\Http\Controllers;

use Validator;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function search(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $failerMessage = '';

        //もしキーワードが入力されている場合
        if (!empty($email) && !empty($password)) {

            // TODO CreateRequestを使用すると、バリデーションチェックは働くがこのメソッドが実行されないためバリデーション未実装
            $query = Customer::where('email', $email)->where('password', $password);
            $model = $query->first();

            if ($model === null) {
                $failerMessage = '対象ユーザーが存在しません';
                return view('login.index', compact('failerMessage', 'email', 'password'));
            }

            // セッションにログイン対象のデータを保存
            session(['loginedModel' => $model]);
            return view('edit.edit', compact('model'));
        } else {
            //キーワードが入力されていない場合は検索フォームへ遷移
            $failerMessage = '検索条件を全て入力してください';
            return view('login.index', compact('failerMessage', 'email', 'password'));
        }
    }
}
