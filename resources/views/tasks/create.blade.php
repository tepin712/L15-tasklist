@extends('layouts.app')

@section('content')

    <h1>タスク新規作成</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
            <div class="form-group">
                {!! Form::label('content', 'タスク') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('status', 'ステータス') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('tasks.index', 'タスク一覧へ戻る',[], ['class' => 'btn btn-secondary']) !!}            
        
        {!! Form::close() !!}
            
        </div>
    </div>

@endsection