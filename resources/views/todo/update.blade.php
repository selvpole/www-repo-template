@extends('layouts.app')

@section('style')
<style>
*{
    //border: solid 1px black;
}

.main-container, .edit-panel{
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
    font-size: 20px;
}

.buttons {
    text-align: center;
}

</style>
@endsection

@section('content')
    <div class="edit-panel d-flex flex-column align-items-center">
        <div class="title">
            <h3>Edit</h3>
        </div>

        <hr>

        <form action="/todo/{{ $task->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <p>Name:</p>
            <input class="input-bar" type="text" value="{{ $task->name }}" name="name">
            
            <p>Description:</p>
            <textarea class="input-bar" type="text" name="description"
                      rows="6">{{ $task->description }}</textarea>
            
            @include('common.errors')
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-success" name="confirm">Confirm</button>
                <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
@endsection