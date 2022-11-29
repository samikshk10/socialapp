<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article App</title>
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
     <h3> <a  class="nav-link " aria-current="page" href="{{route('login')}}">{{auth()->user()->name}}</a></h3>

     <button class="btn btn-secondary"><a href="{{ route('logout') }} " style="color: white">Logout</a></button>  
      @endauth   
    </div>

    

  </div>
</nav>

    <!-- dyanmic content -->
@yield('content')

</body>
</html>