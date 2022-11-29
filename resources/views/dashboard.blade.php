@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to Dashboard</h1>
<form action="{{route('logout')}}" method="get">

    <button type="submit" class="btn btn-secondary">Log Out</button>
</form>
</div>
@endsection
