<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}">Article App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
        </li>
        

      @guest
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('register')}}">Register</a>
          </li>
          @endguest
        
      </ul>
      @auth
      <div class="d-flex align-item-center justify-content-center" style="gap: 20px">
     <h3> <a  class="nav-link " aria-current="page" href="{{route('login')}}">{{auth()->user()->name}}</a></h3>

     <button class="btn btn-secondary"><a href="{{ route('logout') }} " style="color: white;text-decoration:none">Logout</a></button>  
    </div>
      @endauth   
    </div>
  </div>


</nav>

    <!-- dyanmic content -->
@yield('content')

</body>
</html>