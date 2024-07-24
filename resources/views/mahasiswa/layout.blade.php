<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Crud Mahasiswa</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="#">Fikri Haikal</a>
         <div class="collapse navbar-collapse">
            <!-- <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
               </li>
            </ul> -->
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                     @csrf
                     <button type="submit" class="nav-link btn btn-link">Logout</button>
                  </form>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container">
      @yield('content')
   </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>