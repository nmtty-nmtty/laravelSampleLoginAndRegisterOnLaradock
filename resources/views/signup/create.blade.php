@extends('layouts.common')

@section('title','Create')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <form action="{{ route('signup.create') }}" method="POST" class="form" id="form1">
        @csrf
        <h1>Create</h1>
        <p class="name">
          @error('name')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="name" type="text" value="{{old('name')}}" class="feedback-input" id="name" placeholder="name" />
        </p>
        <p class="email">
          @error('email')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="email" type="text" value="{{old('email')}}" class="feedback-input" id="email"
            placeholder="email" />
        </p>

        <p class="password">
          @error('password')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="password" type="password" value="{{old('password')}}" class="feedback-input"
            placeholder="password" id="password" />
        </p>

        <p class="password_confirmation">
          @error('password_confirmation')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="password_confirmation" value="{{old('password_confirmation')}}" type="password"
            class=" feedback-input" placeholder="password_confirmation" id="password_confirmation" />
        </p>

        <div class="submit">
          <input type="submit" value="CREATE" id="button-blue" />
          <div class="ease"></div>
        </div>

      </form>
    </div>
  </div>
  @endsection
  @include('layouts.footer')
