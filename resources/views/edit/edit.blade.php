@extends('layouts.common')

@section('title','Edit')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <h1>Edit</h1>
      <p>Profile</p>
      <table class="col-md-4 col-md-offset-4">
        <tr style="border-bottom: solid 1px;">
          <th>name : </th>
          <td>{{{isset($model->name) ? $model->name : 'NO_NAME'}}}</td>
        </tr>
        <tr style="border-bottom: solid 1px;">
          <th>email : </th>
          <td>{{{isset($model->email) ? $model->email : 'NO_EMAIL'}}}</td>
        </tr>
      </table>
      <p><a href="{{ route('todo.home') }}" class="btn4">TODO List Page</a></p>
    </div>
  </div>
</div>
@endsection
@include('layouts.footer')
