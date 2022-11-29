@extends('layout.app')
@section('content')

<div class="container  p-3 mb-5 mt-5 bg-body rounded" style="width:500px; box-shadow: 7px 7px 14px #868686 , -7px -7px 14px #fff;padding: 20px 40px">

  <h2 class="text-center">LOGIN</h2>
  @if(Session::has('fail'))

<div class="alert alert-danger alert-dissmissible" role='alert'>
  {{Session::get('fail')}}

</div>

@endif
  <form action="{{route('loginuser')}}" method="Post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div class="invalid-feedback">
    email is required
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label ">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1">
    @error('password')
    <div class="invalid-feedback">
        password is required
      </div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary form-control">Login</button>
  </div>

</form>
@endsection
