<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>メッセージ</th>
            <th>タスク</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
            <td>
                @if (Auth::id() == $task->user_id)
                    {!! link_to_route('tasks.edit', '編集', ['id' => $task->id], ['class' => 'btn btn-light btn-sm']) !!}
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>


{{ $tasks->links('pagination::bootstrap-4') }}