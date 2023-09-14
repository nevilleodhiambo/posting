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
        <h1>Personal Information</h1>
        <p>This is information pertaining to you as an individual</p>
      </div>
      <div class="right-content">
        <div class="form-container">
          <h1>Creating Account As Job Applicant</h1>
{{--          
          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          @endif --}}
          <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="row">
              <div class="col mb-3">
                <label class="sr-only">First Name <span style="color: red">*</span></label>
                <input type="text" class="form-control" placeholder="First name" name="fname"><br>
                <span style="color: red">@error('fname'){{$message}}@enderror</span>
              </div>
              <div class="col">
                <label class="sr-only" for="lname">Last Name</label>
                <input type="text" class="form-control" placeholder="Last name" name="lname"><br>
                <span style="color: red">@error('lname'){{$message}}@enderror</span>
              </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                <label class="sr-only" for="email">Email Address</label>
                  <input type="email" class="form-control" placeholder="example@gmail.com" name="email"><br>
                  <span style="color: red">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="col">
                <label class="sr-only" for="email">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="password"><br>
                  <span style="color: red">@error('password'){{$message}}@enderror</span>
                </div>
            </div>

            <div class="row">
                
              {{-- <div class="col mb-1">
                <label class="sr-only" for="email">Date of Birth</label>
                  <input type="date" class="form-control" name="date"><br>
                  <span style="color: red">@error('date'){{$message}}@enderror</span>
                </div> --}}
                
                <div class="form-group col-md-6">
                  <label for="inputState">Gender</label>
                  <select id="inputState" class="form-control" name="gender">
                    <option selected>Male</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>

            </div>

          

            <div class="row">

             

              <div class="form-group col-md-6">
                  <label for="inputState">Nationality</label>
                  <select id="inputState" class="form-control" name="nationality">
                    <option selected value="kenyan">Kenyan</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                  <div class="form-group col-md-6">
                    <label for="inputState">Location</label>
                    <select id="inputState" class="form-control" name="location">
                      <option selected value="kisumu">Kisumu</option>
                      <option value="nairobi">Nairobi</option>
                      <option value="eldoret">Eldoret</option>
                      <option value="mombasa">Mombasa</option>
                      <option value="nakuru">Nakuru</option>
                      <option value="kisii">Kisii</option>
                      <option value="Kericho">Kericho</option>
                      <option value="lamu">Lamu</option>
                      <option value="turkana">Turkana</option>
                    </select>
                  </div>
                  
            </div>

            <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="sr-only" for="inlineFormInput">Mobile Number</label>
                    <input type="text" class="form-control" id="inlineFormInput" placeholder="E.g 0712345678" name="number"><br>
                    <span style="color: red">@error('number'){{$message}}@enderror</span>
                  </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                  <label for="inputState">qualification</label>
                  <select id="inputState" class="form-control" name="qualification">
                    <option selected value="none">None of The above</option>
                    <option value="phd">PHD</option>
                    <option value="masters">Masters</option>
                    <option value="highschool">HighSchool</option>
                    <option value="bachelor">Bachelor</option>
                    <option value="diploma">Diploma</option>
                    <option value="postgrad">PostGrad</option>
                    <option value="certificate">Certificate</option>
                  </select>
                </div>

                <div class="form-group mb-2 col-md-6">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control" name="job">
                    <option selected value="it">IT $ Related</option>
                    <option name="health">Health And Safety</option>
                    <option name="admin">Admin And Office</option>
                  </select>
                </div>
          </div>

          <div class="row">
              <div class="form-group mb-2 col-md-6">
                  <label for="inputState">years of experience</label>
                  <select id="inputState" class="form-control" name="experience">
                    <option selected value="no">No experience/Less than 1 year</option>
                    <option value="one">1 year</option>
                    <option value="two">2 year</option>
                    <option value="three">3 year</option>
                    <option value="four">4 year</option>
                    <option value="five">5 year</option>
                    <option value="more">More than 6 years</option>
                  </select>
                </div>

                <div class="form-group mb-2 col-md-6">
                  <label for="inputState">Availability</label>
                  <select id="inputState" class="form-control" name="availability">
                    <option selected value="immediately">Immediately</option>
                    <option value="one">1 week</option>
                    <option value="two">2 week</option>
                    <option value="three">3 week</option>
                    <option value="month">1 month</option>
                    <option value="twomonths">2 month</option>
                    <option value="more">More Than 2 Months</option>
                  </select>
                </div>
          </div>


            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
