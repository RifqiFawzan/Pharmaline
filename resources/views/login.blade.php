<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validated Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet"  type="text/css" href="{{ asset('/scss/login.css') }}">
</head>
<body>

	<section class="h-100 gradient-form" style="background-color: #eee;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-xl-10">
			  <div class="card rounded-3 text-black">
				<div class="row g-0">
				  <div class="col-lg-6">
					<div class="card-body p-md-5 mx-md-4">
						<nav class="navbar navbar-light ">
							<div class="container-fluid">
								<a href="/">
									<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-arrow-left" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
									  </svg>
								</a>
						
							</div>
						  </nav>
					  <div class="text-center">
						<img src="{{asset('image/logo3.png')}}"
						  style="width: 185px;" alt="logo">
						<h4 class="mt-1 mb-5 pb-1"style="font-weight:bold;">We are Pharmaline</h4>
					  </div>
	  
					  <form>
						<p style="text-align:center; font-weight:bold;">Please Login to Your Account</p>
	  
						<div class="form-outline mb-4">
						  <input type="email" id="form2Example11" class="form-control"
							placeholder="Phone number or email address"/>
						  <label class="form-label" for="form2Example11" style="font-weight:light;">Username</label>
						</div>
	  
						<div class="form-outline mb-4">
						  <input type="password" id="form2Example22" class="form-control" 
						  placeholder="Password" style="font-weight:light;"/>
						  <label class="form-label" for="form2Example22" style="font-weight:light;">Password</label>
						</div>
						<div class="text-center pt fs-5">
						<button type="submit" class="btn btn-primary btn-block fa-lg mb-3 px-">Sign in</button>
						</div>
						<div class="text-center pt-1 mb-5 pb-1">
							
							<a class="text-muted" href="#!">Forgot password?</a>
						  </div>
						  
						<div class="d-flex align-items-center justify-content-center pb-4">
						  <p class="mb-0 me-2"style="font-weight:bold;">Don't have an account?</p>
						  <button type="button" class="btn btn-outline-warning" >Create new</button>
						</div>
	  
					  </form>
	  
					</div>
				  </div>
				  <div class="col-sm-6 px-0 d-none d-sm-block">
					<img src="{{asset('image/bglogin.jpg')}}"
					  alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
				  </div>
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