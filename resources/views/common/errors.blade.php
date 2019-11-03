@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Opps!</strong>
        <br>
        @if ($errors->has('name'))
            <p>The name should be more than 3 words!</p>
        @elseif ($errors->first('description'))
            <p>The description is required!</p>
        @endif
    </div>
@endif
