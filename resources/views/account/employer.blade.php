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
        <h1>Company Information</h1>
        <p>This is information pertaining to your Organoization</p>
      </div>
      <div class="right-content">
        <div class="form-container">
          <h1>Step 1 of 1</h1>
            
          <form method="POST" action="{{route('stremployer')}}">
            @csrf
            <div class="row">
                <div class="col mb-3">
                    <label class="sr-only">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" name="fname">
                  </div>

                  <div class="col mb-3">
                    <label class="sr-only">Last Name</label>
                    <input type="text" class="form-control" placeholder="First name" name="lname">
                  </div>
            </div>

            <div class="row">

                <div class="col mb-3">
                    <label class="sr-only">Work Email</label>
                    <input type="email" class="form-control" placeholder="company@gmail.com" name="email">
                  </div>

                  <div class="col mb-3">
                    <label class="sr-only">Password</label>
                    <input type="password" class="form-control" placeholder="password" name="password">
                  </div>

            </div>

            <div class="row">

                <div class="form-group mb-2 col-md-6">
                    <label for="inputState">Position In Company</label>
                    <select id="inputState" class="form-control" name="position">
                      <option selected value="manager">Manager</option>
                      <option value="director">Director</option>
                      <option value="supervisor">Supervisor</option>
                      <option value="hr">Human Resource</option>
                      <option value="support">Support</option>
                     </select>
                  </div>

                  <div class="col mb-3">
                    <label class="sr-only">Phone Number</label>
                    <input type="text" class="form-control" placeholder="E.g 0712345678" name="phone">
                  </div>
            </div>

            <div class="row">
              <div class="col mb-3">
                  <label class="sr-only">Company Name</label>
                  <input type="text" class="form-control" placeholder="COmpany name" name="cname">
                </div>

                <div class="form-group mb-2 col-md-6">
                  <label for="inputState">Industry</label>
                  <select id="inputState" class="form-control" name="industry">
                    <option selected value="it&related">IT & Related</option>
                    <option value="admin&office">Admin & Office</option>
                    <option value="health">Health</option>
                    <option value="business">Business & Economics</option>
                  </select>
                </div>


          </div>

          <div class="row">

              <div class="form-group mb-2 col-md-6">
                  <label for="inputState">No of EMployees</label>
                  <select id="inputState" class="form-control" name="employeescount">
                    <option selected value="no">0-50</option>
                    <option value="one">51-100</option>
                    <option value="two">101-200</option>
                    <option value="three">200+</option>
                  </select>
                </div>

                <div class="form-group mb-2 col-md-6">
                  <label for="inputState">Where did You Hear About Us</label>
                  <select id="inputState" class="form-control" name="hear">
                    <option selected value="newsletter">Newsletter</option>
                    <option value="online">Online</option>
                    <option value="media">Social Media</option>
                    <option value="other">Other</option>
                  </select>
                </div>

          </div>

          <div class="row">

              <div class="col mb-3">
                  <label class="sr-only">Work Contact</label>
                  <input type="text" class="form-control" placeholder="E.g 0712345678" name="contact">
                </div>

                <div class="col mb-3">
                  <label class="sr-only">Company Email</label>
                  <input type="email" class="form-control" placeholder="E.g company@gmail.com" name="wemail">
                </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="sr-only">Company Website</label>
              <input type="text" class="form-control" placeholder="E.g www.company.orf" name="website">
            </div>
          </div>


            <div class="col-auto justify-content-center"><br>
                <button type="submit" class="btn btn-primary mb-2">Create Your Account</button>
              </div>

          </form>

        </div>
    </div>
  </div>
</div>
</body>
</html>
