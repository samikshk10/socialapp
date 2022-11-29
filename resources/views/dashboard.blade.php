@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to Dashboard</h1>

{{--  {{ dd($data) }}  --}}
    <table class="table">
        <tr class="bg-green">
            <th>Article Title</th>
            <th>Created By</th>
        </tr>
        @foreach ($data as $value)
        <tr>

                <td>{{  $value->title}}</td>      
                <td>{{  $value->User->name}}</td>      
                
            </tr>
            @endforeach
    </table>
</div>
@endsection
