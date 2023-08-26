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
        <h1>Personal Information</h1>
        <p>This is information pertaining to you as an individual</p>
      </div>
      <div class="right-content">
        <div class="form-container">
          <h1>Step 1 of 1</h1>
         
          <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="row">
              <div class="col mb-3">
                <label class="sr-only">First Name</label>
                <input type="text" class="form-control" placeholder="First name" name="fname">
              </div>
              <div class="col">
                <label class="sr-only" for="lname">Last Name</label>
                <input type="text" class="form-control" placeholder="Last name" name="lname">
              </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                <label class="sr-only" for="email">Email Address</label>
                  <input type="email" class="form-control" placeholder="example@gmail.com" name="email">
                </div>
                <div class="col">
                <label class="sr-only" for="email">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="password">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="inputState">Day</label>
                    <select id="inputState" class="form-control" name="day">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="2">3</option>
                      <option value="2">4</option>
                      <option value="2">5</option>
                      <option value="2">6</option>
                      <option value="2">7</option>
                      <option value="2">8</option>
                      <option value="2">9</option>
                      <option value="2">10</option>
                      <option value="2">11</option>
                      <option value="2">12</option>
                      <option value="2">13</option>
                      <option value="2">14</option>
                      <option value="2">15</option>
                      <option value="2">16</option>
                      <option value="2">17</option>
                      <option value="2">18</option>
                      <option value="2">19</option>
                      <option value="2">20</option>
                      <option value="2">21</option>
                      <option value="2">22</option>
                      <option value="2">23</option>
                      <option value="2">24</option>
                      <option value="2">25</option>
                      <option value="2">26</option>
                      <option value="2">27</option>
                      <option value="2">28</option>
                      <option value="2">29</option>
                      <option value="2">30</option>
                      <option value="2">31</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Month</label>
                    <select id="inputState" class="form-control" name="month">
                      <option value="january" selected>January</option>
                      <option value="february">February</option>
                      <option value="march">March</option>
                      <option value="april">April</option>
                      <option value="may">May</option>
                      <option value="june">June</option>
                      <option value="july">July</option>
                      <option value="august">August</option>
                      <option value="september">September</option>
                      <option value="october">October</option>
                      <option value="november">November</option>
                      <option value="december">December</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Year</label>
                    <select id="inputState" class="form-control" name="year">
                      <option value="2010" selected>2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>

                    </select>
                  </div>
            </div>

          

            <div class="row">

              <div class="form-group col-md-4">
                <label for="inputState">Gender</label>
                <select id="inputState" class="form-control" name="gender">
                  <option selected>Male</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                  <label for="inputState">Nationality</label>
                  <select id="inputState" class="form-control" name="nationality">
                    <option selected value="kenyan">Kenyan</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                  <div class="form-group col-md-4">
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
                    <input type="text" class="form-control" id="inlineFormInput" placeholder="E.g 0712345678" name="number">
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
