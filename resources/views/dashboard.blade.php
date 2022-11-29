@extends('layout.app')
@section('content')

<div class="container">
    <h1 class="text-center">Welcome to Dashboard</h1>

   <a href="{{route('addnew')}}"> <button class="btn btn-primary mt-3 mb-3">Add New Article</button> </a>


   @if(session()->has('success'))

    <div class="alert alert-success  alert-dismissible mb-3" id="message" role="alert">
   {{ session()->get('success') }}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


   @endif
{{--  {{ dd($data) }}  --}}
    <table class="table table-striped">
        <tr style="background-color: green;">
            <th>Article Title</th>
            <th>Created By</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $value)
        <tr>

                <td>{{  $value->title}}</td>      
                <td>{{  $value->User->name}}</td>   
                
                @if(auth()->user()->id == $value->user_id)
                <td><a href="delete/{{ $value->id }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                @endif
            </tr>
            @endforeach
    </table>
</div>

<script>
    
    setTimeout(function()
    {
        document.getElementById('message').style.display="none";
        
    },3000);
</script>
@endsection
