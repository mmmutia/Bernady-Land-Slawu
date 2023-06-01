@extends('layout.master')


@section('isi')
<?php  
// require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];

?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <?php

if($userName = $_SESSION['name']){
            
  echo "
  <!-- Slide 1 -->
  <div class='carousel-item active'>
    <div class='carousel-container'>
      <h2 class='animate__animated animate__fadeInDown'>Selamat Datang $userName di <span>Bernady Land Slawu</span></h2>
      <p class='animate__animated animate__fadeInUp'>Hunian yang dirancang sebagai sebuah kota modern di masa depan dengan estetika yang modern dan futuristik memberikan kesan eksklusif.</p>
      <a href='portfolio.php' class='btn-get-started animate__animated animate__fadeInUp'>Pesan Rumah</a>
    </div>
  </div>


  ";

}else{
  echo "
  <!-- Slide 1 -->
  <div class='carousel-item active'>
    <div class='carousel-container'>
      <h2 class='animate__animated animate__fadeInDown'>Selamat Datang di <span>Bernady Land Slawu</span></h2>
      <p class='animate__animated animate__fadeInUp'>Hunian yang dirancang sebagai sebuah kota modern di masa depan dengan estetika yang modern dan futuristik memberikan kesan eksklusif.</p>
      <a href='/portofolio' class='btn-get-started animate__animated animate__fadeInUp'>Pesan Rumah</a>
    </div>
  </div>


  ";
}

      ?>

    

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">The Heart of Jember</h2>
          <p class="animate__animated animate__fadeInUp">Terletak ditengah-tengah wilayah kota yang berbentuk menyerupai hati. Menghadirkan lingkungan yang bersih nan asri, Bernady Land Slawu dibangun dengan infrastruktur bawah tanah dan didukung water treatment plant untuk memenuhi kebutuhan air bersih penghuni.</p>
          <a href="/portofolio" class="btn-get-started animate__animated animate__fadeInUp">Cari Rumah</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">City Outside Tranquility Inside</h2>
          <p class="animate__animated animate__fadeInUp">Mengusung konsep kawasan hijau yang bebas dari polusi, lebih sehat dan lebih asri serta alami memberikan aura positif dan semangat.</p>
          <a href="/services" class="btn-get-started animate__animated animate__fadeInUp">Fasilitas</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Properti Baru</a></h4>
              <p class="description">Berada di pusat area residential Jember, yang akan menjadi pusat bisnis terbaru Kota Jember. Memenuhi berbagai kebutuhan anda dimulai dari furniture, seperti menggunakan Smart Lock.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="portfolio.html">Cluster Perumahan</a></h4>
              <p class="description">Berbagai macam Cluster yang sangat diimpikian diantaranya, Boluevard Magnolia, Camelia, Ege Gardenia, New Edge Gardenia, Pinewood, Plumeria, QBIX, Ruko, SOHO.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Pesan Rumah</a></h4>
              <p class="description">Segera miliki hunian nyaman dan bernilai investasi tinggi diberbagai Cluster unggulan dan  didukung dengan sistem keamanan 24 jam.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Fasilitas</a></h4>
              <p class="description">Bernady Land Slawu menghadirkan Mall, Hotel, SPBU, Bernady Camp, Cendani Park, Still Autocare dan lainnya.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="img/tumbnail-bernady.jpg" class="img-fluid" alt="">
            <a href="https://www.instagram.com/reel/CXhv1pyJMej/?utm_source=ig_web_copy_link" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Urban Activities </a></h4>
              <p class="description">Banyak kegiatan yang bisa kamu lakukan bersama temen, tetangga, atau saudara saat punya hunian dikawasan Bernady Land Slawu.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Pentingnya Ruang Terbuka Hijau</a></h4>
              <p class="description">Ruang Terbuka Hijau yang terdapat di setiap Cluster kawasan Bernady Land Slawu, memiliki banyak manfaat untuk tumbuh kembang keluarga dan lingkungan hidup yang sehat</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    @endsection