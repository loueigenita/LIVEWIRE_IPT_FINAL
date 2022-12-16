<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T A L K</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @livewireStyles
</head>

<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">T A L K</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
               <ul class="navbar-nav ms-auto ">                      
                  @if (!Auth::check())
                  <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/">Login</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/register">Register</a></li>
                @else
                <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/recent-posts">Home</a></li>
          
                  <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/logout"><i class="fas fa-sign-out"></i> Logout</a></li>
                  @endif
              </ul>
               </div>
           </div>
       </nav>
       <div class="container col-md-6 offset-md-3 mt-2 text-center">
       @if (session('Error')) 
               <div class="alert alert-danger">
                       {{session('Error') }}
                   </div>
               </div>
         @endif  
         @if (session('Message'))
               <div class="alert alert-success">
  
                       {{session('Message') }}
                   </div>
               </div>
         @endif 
         @if(session('errors'))
               <div class="alert alert-danger ">
                     Please Fill Up!!!
        
                   </div>
               </div>   
           @endif
          </div>
   
       @yield('content')
   </body>
   <style>
  .bg{
    
    background-image: url("/images/image2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  
  }
    .navbar {
    background: #000000;
  }
  
  .nav-item::after {
     content: '';
     display: block;
     width: 0px;
     height: 2px;
     background: rgb(255, 0, 119);
     transition: 0.4s
  }
  
  .nav-item:hover::after {
     width: 100%
  }
  
  .navbar-dark .navbar-nav .active>.nav-link,
  .navbar-dark .navbar-nav .nav-link.active,
  .navbar-dark .navbar-nav .nav-link.show,
  .navbar-dark .navbar-nav .show>.nav-link,
  .navbar-dark .navbar-nav .nav-link:focus,
  .navbar-dark .navbar-nav .nav-link:hover {
     color: #0400fe
  }
  </style>
   </html>