@extends('layouts.common')

@section('title','Login Form')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <form action="{{ route('login.search') }}" method="POST" class="form" id="form1">
        @csrf
        <h1>LoginForm</h1>
        @error('failerMessage')
        <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
        @enderror

        <p class="email">
          @error('email')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="email" type="email" class="validate[required,custom[email]] feedback-input"
            value="{{old('email')}}" id="email" placeholder="email" />
        </p>

        <p class="password">
          @error('password')
          <p style="font-weight:bold; color: orangered">ERROR : {{$message}}</p>
          @enderror
          <input name="password" type="password"
            class="validate[required,custom[onlyLetterNumber],length[0,100]] feedback-input" value="{{old('password')}}"
            placeholder="password" id="password" />
        </p>

        <p class="remember">
          <input type="checkbox" id="remember" value="remember" />
          <span>Remember me on this computer</span>
        </p>

        <div class="submit">
          <input type="submit" value="LOGIN" id="button-blue" />
          <div class="ease"></div>
        </div>

        <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>

      </form>
    </div>
  </div>
</div>
@endsection
@include('layouts.footer')
