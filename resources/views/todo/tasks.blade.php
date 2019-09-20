@extends('layouts.app')

@section('style')
<style>
*{
    //border: solid 1px black;
}

.main-container, .task-panel {
    height: 100%;
    width: 100%;
}

form {
   width: 30%;
}

.title {
    text-align: center;
    margin-top: 10px;
}

.input-bar {
    width: 100%;
    margin-bottom: 20px;
}

p {
    font-size:10px;
}

.buttons {
    text-align: center;
}

</style>

@section('content')
    <div class="task-panel d-flex flex-column align-items-center">
        <h3 class="title">Add Task</h3>
        <form action="/todo" method="POST">
            <hr>
            {{ csrf_field() }}
            <p>Name:</p>
            <input class="input-bar" type="text" name="name">
            
            <p>Description:</p>
            <textarea class="input-bar" type="text" rows="6" name="description"></textarea>

            @include('common.errors')
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-success" name="add">Add</button>
                <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
@endsection
