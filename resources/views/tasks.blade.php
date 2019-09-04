@extends('test.app')

@section('content')
    <div class="panel_body">
        <form action="/tasks" method="POST">
            <div>
                <label for="task"><strong>Add a Task</strong></label>
            </div>
            <hr>
            {{ csrf_field() }}
            <div class="input_name">
                <p>Name:</p>
                <input type="text" name="name">
            </div>
            
            <div class="input_description">
                <p>Description:</p>
                <input type="text" name="description">
            </div>
            @include('common.errors')
            <br>
            <div class="Add_task_button">
                <input type="submit" value="ADD">
            </div>
        </form>
    </div>
@endsection
