<?php

namespace App\Http\Controllers;

use Validator;
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
        $name = $request->name;
        $response = response()->view('edit.edit', compact('name'));
        $response->cookie('name', $name, 100);
        return $response;
    }
}
