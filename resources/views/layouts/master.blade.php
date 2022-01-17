<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('accueil')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('service')}}">service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contact')}}">contact</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

@yield('content')
  <script src="{{ asset('assets/js/jquery.min.js')}}" >  
    <script src="{{ asset('assets/js/bootstrap.min.js')}}" >  
</body>
</html>