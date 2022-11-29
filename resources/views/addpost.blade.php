@extends('layout.app')

@section('content')
<style>
    label {
        font-size: 20px;
    }
</style>
<div class="container">
    
    <h1>Add New Article</h1>
<form action="{{ route('addposts') }}" method="post">
@csrf
    <label for="">Title</label>
    <input type="text" name="title" id="" placeholder="Please Enter title" class="form-control">
    <button type="submit" class="btn btn-success">Add</button>
</form>
</div>
@endsection