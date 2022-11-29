@extends('layout.app')
@section('content')
<div class="container  p-3 mb-5  mt-5 bg-body rounded"  style="width:500px;box-shadow: 7px 7px 14px #868686 , -7px -7px 14px #fff;padding: 40px 60px">
    
    <h2 class="text-center">REGISTER</h2>
    <form action="{{route('registeruser')}}" method="Post">
        @csrf
        <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
    @error('name')
    <div class="invalid-feedback">
    username is required
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div class="invalid-feedback">
        email is required
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label ">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
    @error('password')
    <div class="invalid-feedback">
        password is required
      </div>
    @enderror
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="form-control btn btn-primary">Register</button>
  </div>
</form>
@endsection
