<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jobs Hub</title>


  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
    }
    .background-div {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      display: flex;
    }
    .left-content {
      flex: 1;
      padding: 40px;
    }
    .right-content {
      flex: 5;
      padding: 40px;
      background-color: #f5f5f5;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }
    .form-container {
      max-width: 600px;
      margin: auto;
    }
  </style>
  <title>Layout Example</title>
</head>
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="{{route('index')}}">
            <span>
              Jobs Hub
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex flex-column flex-lg-row">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('do')}}"> What we do </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('portofolio')}}"> Portfolio </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                </li>
                <div class="d-flex justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('seeklogin')}}">Login</a>
                          </li>
        
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('choose')}}">Register</a>
                          </li>
        
                      </ul>
                </div>

              </ul>
             
              <div class="user_option">
                <a href="">
                  <img src="/images/user.png" alt="">
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <div class="container mt-5">
    <div class="background-div">
      <div class="left-content">
        <h1>My Login</h1>
        <p>Enter Your Email and Password to Login</p>
      </div>
      <div class="right-content">
        <div class="form-container">
  
               
          <form method="POST" action="{{route('seekerlogin')}}">
            @csrf
            {{-- @if ($errors->any)
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif --}}
            <div class="row">
                <div class="col mb-3">
                    <label class="sr-only">First Name</label>
                    <input type="email" class="form-control" placeholder="Enter your Email" name="email">
                    <span style="color: red">@error('email'){{$message}}
                        
                    @enderror</span>
                  </div> 

                  <div class="col mb-3">
                    <label class="sr-only">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span style="color: red">@error('password'){{$message}}
                        
                      @enderror</span>
                  </div>
            </div>
            <div class="col-auto justify-content-center"><br>
                <button type="submit" class="btn btn-primary mb-2">Login</button>
              </div>
        </form>
          <p>Don't Have an Account? <a href="{{route('choose')}}">Go to Sign Up</a></p>

        </div>
    </div>
  </div>
</div>
</body>
</html>
