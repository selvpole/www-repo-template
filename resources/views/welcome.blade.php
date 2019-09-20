@extends('layouts.app')

@section('style')
<style>
.main-container, .title-block {
    height: 100%;
    width: 100%;
}

button {
    margin-top: 20px;
}

</style>
@endsection

@section('content')
<div class="title-block d-flex flex-column justify-content-center align-items-center">
    <h1 class="title text-center">CSCC WWW TEMPLATE</h1>
    <button class="btn btn-primary" onclick="location.href = 'todo'">Enter</button>
</div>
<div>
</div>
@endsection

@section('script')
@endsection
