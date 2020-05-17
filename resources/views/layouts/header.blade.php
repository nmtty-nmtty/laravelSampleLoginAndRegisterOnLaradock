@section('header')

<ul>
  <li><a href="{{ route('login.home') }}" class="btn2">Login</a></li>
  <li><a href="{{ route('signup.home') }}" class="btn4">Create</a></li>
  <?php $loginedModel = Session::get('loginedModel'); ?>
  <li><a href="" class="loginSing">{{{isset($loginedModel) ? 'LOGOUT' : ''}}}</a></li>
  <li><a href="" class="loginIcon">{{{isset($loginedModel) ? 'LOGINAME : '.$loginedModel->name : ''}}}</a></li>
</ul>

@endsection
