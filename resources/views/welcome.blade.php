@extends('layouts.app')

@section('content')
    @if (Auth::check())

    <h1>タスク一覧</h1>
    
    @if(count($tasks) > 0)
        @include('tasks.tasks', ['tasks' => $tasks])
        {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
    @else
    <p>タスクは登録されていません</p>
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
    @endif


    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the TaskList</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection