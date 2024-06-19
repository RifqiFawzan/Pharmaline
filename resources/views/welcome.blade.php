<!DOCTYPE html>
<html>
<head>
    <title>Pharma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--<link rel="style sheet" href="#";>-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,300&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">-->
    <link rel="stylesheet"  type="text/css" href="{{ asset('/scss/login.css') }}">
</head>

<body>
    <!-- <div class="container-navbar">
        <div class="cont-nav">
            <p><img src="" width="" height=""></p>
            <p class="nama-apotek">Pharma</p>
            <div class="search-box">
                <input type="text" placeholder="Cari Obat..."/>
                <a href="#"><i class="fa-regular fa-magnifying-glass"></i></a>
            </div>
            <ul>
                <li class="keranjang">
                    <img src="keranjang.png" width="20"><a href="#">Keranjang</a></img>
                </li>
                <li class="login">
                    <img src="">
                </li>
            </ul>
        </div>
    </div> -->
      <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4 shadow-sm sticky-top">
      
      <div class=" container-fluid container nav-tabs">
          <a class="navbar-brand ms-2 " href="#">
            <img src="{{asset('image/logo3.png')}}" width="300"></img>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            </ul>
            <div class="d-flex col-9 justify-content-between">
                <form class="d-flex col-6" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari di Pharmaline" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Cari</button>
                </form>
                  <div>
                    <img src="{{asset('image/keranjang1.png')}}" width="30"></img>
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
      <!--carousel-->
      <div id="carousel-apotek" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">     
          <div class="carousel-item active c-item">
            <img src="{{asset('image/homepg1.png')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kesehatan yang Terpercaya, Solusi Terbaik di Pharmaline!</h5>
                <p >Mari bergabung bersama kami</p>
                <a href="/signup">
                <button class="btn btn-primary">Signup</button>
                </a>
              </div>
          </div>
          <div class="carousel-item c-item">
            <img src="{{asset('image/adv2.jpg')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Konsultasi dengan Apoteker Terbaik Kami</h5>
                <p>Segera konsultasi di Pharmaline</p>
                </div>
          </div>
          <div class="carousel-item c-item">
            <img src="{{asset('image/adv3.jpg')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Produk dengan Kualitas dan Pilihan Terbaik</h5>
                <p>Hanya ada di Pharmaline</p>
                </div>
          </div>
        </div>
      </div>
        <!--konten-->

       <section class="menu p-4">
            <div class="container p-2 bg-muted shadow rounded">
                <div class="row justify-content-center">
                    <div class="col-4 p-2 text-align-center" style="border: 1px solid lightblue">
                         <a href="konsultasi" style="text-decoration: none;">
                            <div class="card text-center fs-3">
                                <img src="{{asset('image/Konsultasi2.jpg')}}" class="w-100" alt="">
                                <p style="color: #526D82;">Konsultasi</p>
                                </div>
                            </a>       
                    </div>
                    <div class="col-4 p-2" style="border: 1px solid lightblue;">
                        <a href="obat" style="text-decoration: none;">
                            <div class="card text-center fs-3">
                                <img src="{{asset('image/obat.jpg')}}" class="w-100" alt="">
                                <p style="color: #526D82;">Produk</p>
                                </div>
                        </a>
                </div>
            </div>
        </section>
     

        
        <section id="konten " class="p-1 bg-light shadow border">
            <div class="cont">
                <div class="row">
                    <div class="col-6">
                        <p class="fs-2 ms-3">Produk</p>
                    </div>
                    <div class="col-6">
                        <p class=" d-flex justify-content-end fs-3 me-5"><a href="obat" style="text-decoration: none; color: #526D82;">Lihat Semua</a></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <a href="produk6" style="text-decoration: none;"><div class="col-3">
                        <div class="card">
                            <img src="{{asset('image/Produk 6.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h3 class="card-text fs-4 text-truncate">Kool Fever Bayi Sach (per Pcs)</h3>
                            <p class="fs-3">Rp 6,200-</p>
                            <span class="stock">Stok: 5</span>
                           
                              
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-3">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <img src="{{asset('image/Produk 9.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h3 class="card-text fs-4 text-truncate">Nutriwell Eye Formula 30S</h3>
                                <p class="fs-3">Rp 230,000-</p>
                                <span class="stock">Stok: 8</span>
                                
                                </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-3">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <img src="{{asset('image/Produk 12.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h3 class="card-text fs-4 text-truncate">Panadol for Children Chewable (per Pcs)</h3>
                                <p class="fs-3">Rp 128,000-</p>
                                <span class="stock">Stok: 3</span>
                                
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="produk1" style="text-decoration: none;">
                            <div class="card">
                                <img src="{{asset('image/Produk 1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h3 class="card-text fs-4 text-truncate">Accu Check Instant Strip (per Pcs)</h3>
                                <p class="fs-3">Rp 171,000-</p>
                                <span class="stock">Stok: 2</span>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div>
            </div>
        </section> 
        <br/>
        <br/>
        <br/>
        <br/>
        <section id="deskripsi1" class="" >
            <div class="container text-center">
                <div class="row ">
                  <div class="col  text-start fs-5 mt-5">
                    <h3 style="font-weight:600;">Pharmaline</h3>
                    <p >Pharmaline adalah  apotek modern yang menyediakan berbagai macam kebutuhan kesehatan dan produk farmasi berkualitas tinggi. Dengan reputasi yang solid dan pengalaman bertahun-tahun.
                        Pharmaline telah menjadi salah satu apotek terpercaya yang diandalkan oleh masyarakat. Dengan mengutamakan kepuasan pelanggan dan integritas dalam pelayanan, Pharmaline terus berinovasi untuk memberikan solusi kesehatan yang terbaik bagi semua pelanggan yang mempercayakan kesehatan mereka kepadanya.</p>
                  </div>
                  <div class="col ">
                    <div class="image "><img src="{{asset('image/apotek.jpg')}}" class="rounded w-30 float-end border" alt="..."></div>
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

        </div>
    </div>
  </div>
</body>
</html>