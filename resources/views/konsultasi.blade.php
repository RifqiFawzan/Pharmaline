<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Konsultasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet"  type="text/css" href="{{ asset('/scss/login.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary p-4 shadow-sm sticky-top">
        <div class="container-fluid container">
          <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
        </a>
          <a class="navbar-brand ms-3" href="#">Konsultasi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          <div class="d-flex col-11 justify-content-between">
                <form class="d-flex justify-content-center col-6 pl-8" role="search">
                </form>

                  <div>
                    <img src="{{asset('image/keranjang1.png')}}" width="30"><a href="#"></a></img>
                    <a href="/signup">
                        <button class="btn btn-secondary">Signup</button>
                    </a>
                    <a href="/login">
                        <button class="btn btn-primary">Login</button>
                    </a>
                      
                  </div>
                  
            </div>
          </div>
        </div>
      </nav>


	<section class="h-100 gradient-form" style="background-color: #eee;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-xl-10">
			  <div class="card rounded-3 text-black">
				<div class="row g-0">
				  <div class="col-lg-6">
					<div class="card-body p-md-5 mx-md-4">
					  <div class="text-center">
						<img src="{{asset('image/logo3.png')}}"
						  style="width: 185px;" alt="logo">
						<h4 class="mt-1 mb-5 pb-1"style="font-weight:bold;">We are Pharmaline</h4>
					  </div>
	  
					  <a href="tautan1" style="text-decoration: none;">
					  <div class="box1" style = "width: 300px; height: 125px; background-color: #EEEEEE; padding: 20px; border-radius: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin: 27px;">
					  <h2 style="color: #000000; font-size: 20px; margin-bottom: 10px; font-weight: bold; text-align: center;">Chat Asisten Apoteker</h2>
    					<p style = "color: #666666; font-size: 15px; line-height: 1.5; text-align: center;">Apoteker akan membantumu mendapatkan rekomendasi obat.</p>
						</div>
						</a>
						
						<a href="tautan2" style="text-decoration: none;">
					  <div class="box2" style = "width: 300px; height: 125px; background-color: #EEEEEE; padding: 20px; border-radius: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin: 27px">
    					<h2 style = "color: #000000; font-size: 20px; margin-bottom: 10px; font-weight: bold; text-align: center;">Chat Apotek</h2>
    					<p style = "color: #666666; font-size: 15px; line-height: 1.5;text-align: center;">Butuh bantuan? Kami akan membantumu melalui kontak.</p>
 					 </div>
					  </a>

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