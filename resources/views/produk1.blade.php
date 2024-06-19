<!DOCTYPE html>
<html>
<head>
    <title>Produk1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="style sheet" href="#";>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,300&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">-->
    <link rel="stylesheet"  type="text/css" href="{{ asset('/scss/login.css') }}">
</head>

<body>
   
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4 shadow-sm sticky-top">
        <div class="container-fluid container">
          <a href="obat">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
        </a>
          <a class="navbar-brand ms-3" href="#">Produk</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex col-11 justify-content-between">
                <form class="d-flex justify-content-center col-6 pl-8" role="search">
                    <input class="form-control " type="search" placeholder="Cari di Pharmaline" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Cari</button>
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
        <!-- Header -->

        <!-- Konten -->
        <section id="item" class="mt-4">
  <div class="container">
    <h3 class="card-text fs-4 text-truncate">Accu Check Instant Strip (per Pcs)</h3>
    <div class="row">
      <div class="col-3">
        <div class="card">
          <img src="{{asset('image/Produk 1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="fs-3">Rp. 171.000</p>
            <span class="stock">Stok: 2</span>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div class="deskripsi">
          <h2>Deskripsi Produk</h2>
          <p>Accu Check Instant Strip 50S merupakan strip dari Accu Check Instant Meter yang berisi 50 strip. Strip ini digunakan untuk membaca hasil gula darah pada layar Accu Check Instant Meter setelah diberikan sedikit sampel darah. Tes strip masih stabil sampai tanggal kadaluarsa yang tercantum pada vial.</p>
        </div>
        <div>
    <a href="pembayaran">
    <button type="button" class="btn btn-primary btn-lg">Beli Sekarang</button>
        </a>
    <a href="keranjang">
    <button type="button" class="btn btn-secondary btn-lg">+Keranjang</button>
        </a>
    </div>
      </div>
    </div>
  </div>
</section>
         <!-- Konten -->
      

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
    <a class="text-reset fw-bold" href="/" style="text-decoration: none;">Pharmaline.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
       </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

   
</body>
</html>