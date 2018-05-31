@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <h3>My tasks</h3>
    <a href="{{route('tasks.create')}}" class="btn btn-success">Create</a>
      <table class="table">
        <thead>
          <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Actions</td>
          </tr>
        </thead>

        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>
              <a href="{{ route('tasks.show', $task->id) }}">
                <span class="glyphicon glyphicon-eye-open"></span>
              </a>

              <a href="{{ route('tasks.edit', $task->id) }}">
                <span class="glyphicon glyphicon-edit"></span>
              </a>
              
              {!!Form::open(['method'=>'DELETE', 'route'=>['tasks.destroy', $task->id]])!!}
              <button onclick="return confirm('Are you sure?')">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
              {!!Form::close()!!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection
