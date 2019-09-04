<!-- INPUT -->
<button onclick="location.href = 'tasks'">Add Task</button>

@if ($errors->has('title'))
    <strong>{{ $errors->first('title') }}</strong>
@endif

<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Created Time</th>
        <th></th>
    </tr>
@foreach ($tasks as $tasks)
    <tr>
        <th>{{ $tasks->name }}</th>
        <th>{{ $tasks->description }}</th>
        <th>{{ $tasks->created_at }}</th>
        <th>
            <form action="/todo/{{ $tasks->id }}" method="POST">
                {{ csrf_field()  }}
                {{ method_field('Delete') }}
                <input type="submit" value="Delete">
            </form>
        </th>
    </tr>
@endforeach
</table>
