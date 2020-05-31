@extends('layouts.common')

@section('title','TODO')
@include('layouts.header')
@section('content')
<div class="container">
  <div id="form-main">
    <div id="form-div">
      <h1>TODO List</h1>
      <form id="task-form">
        <input type="radio" name="workStatus" id="all" value="all" checked> 全て&nbsp;
        <input type="radio" name="workStatus" id="uncompleted" value="working"> 作業中&nbsp;
        <input type="radio" name="workStatus" id="completed" value="complete"> 完了
      </form>
      <table border="1">
        <thead>
          <th>ID&nbsp;</th>
          <th>コメント&nbsp;</th>
          <th>作業状態&nbsp;</th>
          <th></th>
        </thead>

        <tbody>
          @if (isset($models))
          @foreach ($models as $model)
          <?php $modelId = $model->id; ?>
          <?php $complete_flg = $model->complete_flg; ?>
          <tr class="tasks">
            <td>{{$loop->index}}</td>
            <td>{{$model->comment}}</td>
            <td>
              <form action="{{ route('todo.update',['id' => $modelId]) }}" method="POST" class="form">
                @csrf
                @if($model->complete_flg)
                <button class="completedTasks" type=“submit”>完了</button>
                @else
                <button class="uncompletedTasks" type=“submit”>作業中</button>
                @endif
              </form>
            </td>

            <form action="{{ route('todo.delete',['id' => $modelId]) }}" method="POST" class="form">
              @csrf
              @method('DELETE')
              <td><button type=“submit”>削除</button></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif

      <script>
        // Radio button箇所の取得
        const all = document.getElementById('all');
        const completed = document.getElementById('completed');
        const uncompleted = document.getElementById('uncompleted');
        // ループ内Task elements箇所の取得
        const tasks = document.querySelectorAll('.tasks');
        const completedTasks = document.querySelectorAll('.completedTasks');
        const uncompletedTasks = document.querySelectorAll('.uncompletedTasks');
        // Radio button押下時実行Method 
        document.getElementById('task-form').addEventListener('click',() =>{
            if(all.checked){
                tasks.forEach( task => task.style.display = '');
            }else if(completed.checked){
              completedTasks.forEach(task=> task.closest('.tasks').style.display = '');
              uncompletedTasks.forEach(task=> task.closest('.tasks').style.display = 'none');
            }else if(uncompleted.checked){
              completedTasks.forEach(task=> task.closest('.tasks').style.display = 'none');
              uncompletedTasks.forEach(task=> task.closest('.tasks').style.display = '');
            }
          });
      </script>

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
