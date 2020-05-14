@section('header')

<ul>
  <li><a href="{{ route('login.home') }}" class="btn2">Login</a></li>
  <li><a href="{{ route('signup.home') }}" class="btn4">Create</a></li>
  <li><a href="" class="loginSing">{{{isset($name) ? 'LOGOUT' : ''}}}</a></li>
  <li><a href="" class="loginIcon">{{{isset($name) ? 'LOGINAME : '.$name : ''}}}</a></li>
</ul>

@endsection
