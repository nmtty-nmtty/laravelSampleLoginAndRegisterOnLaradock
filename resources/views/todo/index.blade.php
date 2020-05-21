@extends('layouts.common')

@section('title','TODO')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <h1>TODO List</h1>
      <input type="radio" name="workStatus" value="all" checked> 全て&nbsp;
      <input type="radio" name="workStatus" value="working"> 作業中&nbsp;
      <input type="radio" name="workStatus" value="complete"> 完了
      <table class="col-md-4 col-md-offset-4">
        <tr>
          <th>ID&nbsp;</th>
          <th>コメント&nbsp;</th>
          <th>作業状態&nbsp;</th>
          <th></th>
        </tr>

        @if (isset($models))
        @foreach ($models as $model)
        <?php $modelId = $model->id; ?>
        <tr>
          <td>{{{isset($modelId) ? $loop->index : ''}}}</td>
          <td>{{{isset($model->comment) ? $model->comment : ''}}}</td>

          　<form action="{{ route('todo.update',['id' => $modelId]) }}" method="POST" class="form">
            @csrf
            <td style=""><button type=“submit”>{{$model->complete_flg ? '完了' : '作業中'}}</button></td>
          </form>

          　<form action="{{ route('todo.delete',['id' => $modelId]) }}" method="POST" class="form">
            @csrf
            @method('DELETE')
            <td style=""><button type=“submit”>削除</button></td>
          </form>
        </tr>

        @endforeach
        @endif
      </table>
      <h2>新規タスク追加</h2>
      <form action="{{ route('todo.create') }}" method="POST" class="form" id="form1">
        @csrf
        <input type="text" name="comment" value="{{old('comment')}}" id="comment">
        <p><input type="submit" value="追加"></p>
      </form>
    </div>


  </div>
</div>
@endsection
@include('layouts.footer')
