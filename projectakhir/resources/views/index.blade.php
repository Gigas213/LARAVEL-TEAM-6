<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Landing Page|Kelompok 6</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/templatemo-art-factory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/owl-carousel.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Kelompok 6</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#frequently-question">Services</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome"> 

        <!-- ***** Header Text Start ***** -->
        <div class="header-text" style="padding-top: 160px;">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><strong>Kelompok 6</strong></h1>
                        <p>Begabung dengan kami untuk mendapatkan diskon dan penawaran terbaik!</p>
                        <a href="{{ route('login') }}" class="main-button-slider">Login</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ asset('assets1/images/gambar3.png') }}" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets1/images/girl.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Girl Six Bags</h5>
                    </div>
                    <div class="left-text">
                        <p>Six bags menyediakan tas untuk perempuan dalam semua kategori, yaitu backpack, ruskpack, tote bag, mesengger bag dan duffel bag.<br><br>
                        Six Bags mengharapkan dapat memudahkan perempuan dalam memilih model tas yang diinginkan sesuai gendernya.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Boy Six Bags</h5>
                    </div>
                    <p>Six bags menyediakan tas untuk laki-laki dalam semua kategori, yaitu backpack, ruskpack, tote bag, mesengger bag dan duffel bag.<br></br>
                    Six Bags mengharapkan dapat memudahkan laki-laki dalam memilih model tas yang diinginkan sesuai gendernya.</p>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets1/images/boy.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="row">
                    <div class="col text-center" style="padding-bottom: 50px;">
                        <h2>Keuntungan Belanja di Six Bags</h2>
                    </div>
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/thumbs-up.png') }}" alt="gambar1"></i>
                        </div>
                        <h5 class="service-title">Top 5 Tas Terbaik</h5>
                        <p>Six bags meraih top 5 tas terbaik se-Indonesia dalam ajang pemilihan yang diadakan oleh "Bangga Tas Lokal".</p>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/bag.png') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Kualitas Terbaik</h5>
                        <p>Six bags menggunakan bahan yang berkualitas terbaik dan diakui di seluruh pasar tas Indonesia.</p>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/truck.png') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Kecepatan Pengiriman</h5>
                        <p>Pengirimannya cepat karena langsung dikirmkan dan kami melayani pengiriman ke seluruh wilayah Indonesia seluruh negara.</p>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/call-center.png') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Kecepatan Pelayanan</h5>
                        <p>Jika ada kendala atau ingin melakukan pembelian, Kami siap melayani anda 24 jam via online dan jam kerja via offline.</p>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/discount.png') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Banyak Diskon Menarik</h5>
                        <p>Kita memberikan banyak diskon setiap bulannya untuk pelanggan setia kami dan temukan penawaran terbaik juga di Six Bags.</p>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('assets1/images/shopping-cart.png') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Garansi Pengiriman</h5>
                        <p>Kita menyediakan garansi pengiriman setiap pembelian tas di Six Bags sehingga menjamin pengiriman anda aman sampai tujuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="section" id="frequently-question">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Pertanyaan Teratas</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p>Anda bisa melihat pertanyaan teratas yang ada terlebih dahulu.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5>Berikut merupakan pertanyaan yang biasanya ditanyakan oleh para pelanggan Six Bags</h5>
                    <div class="accordion-text">
                        <p>Jika merasa belum jelas atau bingung, anda bisa mengajukan pertanyaan via email yang tertera dibawah ini. Kami akan segera menjawab pertanyaan anda dalam waktu 24 jam pada waktu kerja. Anda juga dapat menghubungi kami dengan klik contact us, lalu pilih salah satu kontak untuk dihubungi. Sekian, kami ucapkan terima kasih.</p>
                        <span>Email: <a href="#">sixbags@company.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Bagimana cara melakukan pemesanan?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Anda dapat melakukan pemesanan dengan melakukan login terlebih dahulu.
                                    <br><br>
                                    Setelah anda melakukan login, silahkan klik buy dan selesaikan pembayaran.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Dimana offline store six bags?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Kami memiliki 1 offline store yang berada di Jalan Kemanggi, No. 247, Kota Palembang.
                                    <br><br>
                                    Anda dapat mengunjungi offline store kami untuk mendapatkan kartu pelanggan secara gratis</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Apakah tas yang dipesan bisa sampai tujuan dalam satu hari?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Pengiriman bisa sampai ke tujuan dalam satu hari.
                                    <br><br>
                                    Anda Bisa memilih opsi pengiriman kilat yang terdapat saat anda melakukan pembelian.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Apakah bisa dikirim ke luar negeri?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Pengiriman bisa sampai keluar negeri.
                                    <br><br>
                                    Tetapi kemungkinan pengiriman paling cepat 3 hari dan paling lambat 5 hari.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Bagaimana cara mendapatkan diskon?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Anda bisa mendapatkan diskon jika diskon tersedia.
                                    <br><br>
                                    Caranya dengan memasukkan kode diskon atau voucher yang dibagikan di sosial media kami. Kuota terbatas!</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Apa keuntungan kartu pelanggan Six Bags?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Keuntungannya anda akan mendapatkan diskon tambahan spesial setiap pembelian 150 ribu.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="container-fluid bg-custom py-5" id="footer-custom">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 ">
                     <div class="logo-part">
                        <h2>Six Bags</h2>
                        <h6>Jalan Kemanggi, No. 274, Kota Palembang.</h6>
                        <h6>Anda dapat mengunjungi offline store kami untuk mendapatkan kartu pelanggan secara gratis.</h6>
                     </div>
                  </div>
                  <div class="col-md-6 px-4">
                     <h6>Sedikit Tentang Kami</h6>
                     <h6>Kami menjual tas yang dibuat dengan bahan yang teruji kualitasnya dengan harga yang masih terjangkau untuk masyarakat umum.</h6>
                     <a href="#" class="btn-footer"> Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 px-4">
                     <h6>Butuh Bantuan ?</h6>
                     <div class="row ">
                        <div class="col-md-6">
                           <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Tentang</a></li>
                              <li><a href="#">Kontak</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 ">
                     <h6>Sosial Media</h6>
                     <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </footer>



    <!-- jQuery -->
    <script src="{{ asset('assets1/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets1/js/popper.js') }}"></script>
    <script src="{{ asset('assets1/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets1/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets1/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets1/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets1/js/imgfix.min.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('assets1/js/custom.js') }}"></script>

  </body>
</html>