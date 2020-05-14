@extends('layouts.common')

@section('title','Login Form')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <form class="form" id="form1">
        <h1>LoginForm</h1>
        <p class="email">
          <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email"
            placeholder="email" />
        </p>

        <p class="password">
          <input name="password" type="password"
            class="validate[required,custom[onlyLetterNumber],length[0,100]] feedback-input" placeholder="password"
            id="password" />
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
