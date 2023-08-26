<!DOCTYPE html>
<html lang="en">
<head>
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
<body>
  <div class="container mt-5">
    <div class="background-div">
      <div class="left-content">
        <h1>Employer Login</h1>
        <p>Enter Your Company Email to Login and Password</p>
      </div>
      <div class="right-content">
        <div class="form-container">

               
          <form method="POST" action="{{route('emplogin')}}">
            @csrf
            <div class="row">
                <div class="col mb-3">
                    <label class="sr-only">Work Email</label>
                    <input type="email" class="form-control" placeholder="Enter your Email" name="wemail" required>
                  </div> 

                  <div class="col mb-3">
                    <label class="sr-only">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                  </div>
            </div>
            <div class="col-auto justify-content-center"><br>
                <button type="submit" class="btn btn-primary mb-2">Login</button>
              </div>
        </form>

        </div>
    </div>
  </div>
</div>
</body>
</html>
