<?php

namespace App\Http\Controllers;

use Validator;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;

class SignupController extends Controller
{

    public function index()
    {
        return view('signup.create');
    }

    public function create(CreateRequest $request)
    {
        $customer = new Customer;

        // パスワードをハッシュ化
        $request->merge([
            'password' => password_hash($request->password, PASSWORD_DEFAULT)
        ]);

        // バリデーションチェックに問題がなければ実行
        $form = $request->all();
        unset($form['_token']);
        // TODO　remember_tokenカラムがnull（Auth機能を使用する際に必要なので、一旦置いておく）
        $model = $customer->create($form);

        // セッションにログイン対象のデータを保存
        session(['loginedModel' => $model]);
        return view('edit.edit', compact('model'));
    }
}
