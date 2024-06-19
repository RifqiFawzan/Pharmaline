<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validated Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,300&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">-->
    <link rel="stylesheet"  type="text/css" href="{{ asset('/scss/login.css') }}">
	
</head>
<body>

<section class="vh-100 gradient-custom" style="background-image: url({{asset('image/bgsignup.jpg')}}); background-position: center; background-repeat: no-repeat;">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px; background-color: #f8f9fa;">
                <div class="card-body p-4 p-md-5">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                          </svg>
                    </a>
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Sign Up</h3>
                  <form>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                          <label for="birthdayDate" class="form-label">Email</label>
                        </div>
                      </div>

                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                            <label for="birthdayDate" class="form-label">Password</label>
                          </div>
                      </div>
                      </div>
                       <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                          <label for="birthdayDate" class="form-label">Phone Number</label>
                        </div>
                      </div>

                      <div class="col-md-6 mb-1 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                            <textarea type="text" class="form-control form-control-lg" id="birthdayDate"></textarea>
                            <label for="birthdayDate" class="form-label">Location</label>
                          </div>
                      </div>
                      </div>

                      <!---->
                   
                    <div class="row">
                      <div class="col-12">
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>