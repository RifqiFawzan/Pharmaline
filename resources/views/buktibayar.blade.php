<!DOCTYPE html>
<html>
<head>
    <title>Pharma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--<link rel="style sheet" href="#";> -->
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
          <a class="navbar-brand ms-3" href="#">Bukti Pembayaran</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex col-11 justify-content-between">
                <form class="d-flex justify-content-center col-6 pl-8" role="search">
                    
                </form>
                  <div>
                    <img src="{{asset('image/keranjang1.png')}}" width="30"><a href="#"></a></img>
                    <button class="btn btn-secondary"><a href="register.blade.php"></a>Signup</button>
                      <button class="btn btn-primary">Login</button>
                  </div>
            </div>
          </div>
        </div>
      </nav>

      <section>
      <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-5">
                        <div class="py-3 border px-4 rounded-2">
                            <p class="text-center fs-4 fw-semibold">
                                BUKTI PEMBAYARAN
                            </p>
                            <div
                                class="g-col-2 rounded-3 d justify-content-center text-center">
                                <div class="p-5">
                                    <p style="font-weight: bold;">Transfer ke:</p>
                                    <img
                                        src="{{asset('image/bank_bni.png')}}"
                                        alt=""
                                        width="160px" />
                                    <p class="mt-3">
                                        0647294735
                                    </p>
                                    <p class="mt-5">JUMLAH YANG HARUS DIBAYAR</p>
                                    <p class="fw-bold">Rp. 176.000</p>
                                </div>
                            </div>
                            <div class="container text-center">
                             <div class="upload">
                               <label for="file" class="btn-upload mb-3" style="font-size:12px; border: 1px solid #4CAF50; border-radius: 4px; padding: 10px 20px; background-color: #4CAF50; color: white; cursor: pointer;">
                                   <i class="fa fa-upload"></i> Upload File
                                   <input type="file" id="file" style="display: none;">
                                 </label>
                             </div>
                            </div>
                        </div>
                    </div>
      <section>
        <div class="container mb-3 pt-5">
            <div class="row justify-content-center  ">
            <a href="metode_pembayaran" class="gradient-hover-effect">Kirim Bukti Pembayaran</a>
            </div>
        </div>
      </section>

          <!-- Footer -->
       <section>
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      
    </div>
    <!-- Left -->

    <!-- Right -->
    
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>About Us
          </h6>
          <p>Pharmaline adalah  apotek modern yang menyediakan berbagai macam kebutuhan kesehatan dan produk farmasi berkualitas tinggi.</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-3">
            Products
          </h6>
          <p>
            <a href="obat" class="text-reset" style="text-decoration: none;">Produk</a> 
          </p>
          <p>
            <a href="konsultasi" class="text-reset" style="text-decoration: none;">Konsultasi</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-5 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
          <p ><i class="fa-duotone fa-location-dot"></i>Jl. Sultan Kaharudin No.8, Karang Pule, Kec. Sekarbela, Kota Mataram, Nusa Tenggara Bar. 83116</p>
          <p ><i class="fa-solid fa-envelope"></i>info@pharmaline.com</p>
          <p ><i class="fa-duotone fa-phone"></i> 0812 1166 1166</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4">
    © All rights reserved.
    <a class="text-reset fw-bold" href="/"style="text-decoration: none;">Pharmaline.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
       </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

   
</body>
</html>