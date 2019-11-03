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
@endsection

@section('content')
    <div class="task-panel d-flex flex-column align-items-center">
        <h3 class="title">Add Task</h3>
        <form action="/todo" method="POST">
            <hr>
            {{ csrf_field() }}
            <p>Name:</p>
            <input class="input-bar" type="text" name="name">            
            <div id="alertName" class="alert alert-danger collapse">
                <a id="closeName" href="#" class="close">&times;</a>
                <strong>Error!</strong> The name should be more than 3 words!
            </div>

            <p>Description:</p>
            <textarea class="input-bar" type="text" rows="6" name="description"></textarea>
            <div id="alertDesc" class="alert alert-danger collapse">
                <a id="closeDesc" href="#" class="close">&times;</a>
                <strong>Error!</strong> The description is required!
            </div>
            <!-- @include('common.errors') -->
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-success" name="add">Add</button>
                <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
<script>
    @if ($errors->has('name'))
        $('#alertName').show('fade');
        $('#closeName').click(function() {
            $('#alertName').hide();
        });
    @elseif ($errors->has('description'))
        $('#alertDesc').show('fade');
        $('#closeDesc').click(function() {
            $('#alertDesc').hide('fade');
        });
    @endif
</script>
@endsection