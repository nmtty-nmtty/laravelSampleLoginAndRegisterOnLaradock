@extends('layouts.common')

@section('title','Edit')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <h1>Edit</h1>
      <p>LoginName : {{$name}}</p>
    </div>
  </div>
</div>
@endsection
@include('layouts.footer')
