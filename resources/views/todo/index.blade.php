@extends('layouts.app')

@section('style')
<style>
*{
    //border: solid 1px black;
}

.main-container, .todo-panel{
    height: 100%;
    width: 100%;
}

table {
    margin-top: 10px;
}

tr {
    vertical-align: top;
}

tr th {
    margin-right: 100px;
    padding: 10px;
    font-size: 20px;
}

.butt {
    display: flex;
    justify-content: center;
}

.butt_add {
    width: 100%;
}

.butt .butt_mod {
    width: 90px;
    margin: 0px 5px;
}
</style>
@endsection

@section('content')
<div class="todo-panel d-flex flex-column align-items-center">
    @if ($errors->has('title'))
        <strong>{{ $errors->first('title') }}</strong>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Created Time</th>
            <!-- <th>
                <button onclick="location.href = '/todo/tasks'" class="btn btn-primary">Add Task</button>
            </th> -->
            <th>Latest Updated Time</th>
            <th>
                <form action="/todo/create" method="GET">
                    <button type="submit" class="btn btn-primary butt butt_add">Add Task</button>
                </form>
            </th>
        </tr>
        @foreach ($tasks as $tasks)
        <tr>
            <th>{{ $tasks->name }}</th>
            <th>{{ $tasks->description }}</th>
            <th>{{ $tasks->created_at }}</th>
            <th>{{ $tasks->updated_at }}</th>
            <th>
                <div class="butt">
                    <form action="/todo/{{ $tasks->id }}/edit" method="GET">
                        <button type="submit" class="btn btn-success butt_mod">Edit</button>
                    </form>
                    <form action="/todo/{{ $tasks->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('Delete') }}
                        <button type="submit" class="btn btn-danger butt_mod">Delete</button>
                    </form>
                </div>
            </th>
        </tr>
        @endforeach
    </table>
</div>
@endsection
