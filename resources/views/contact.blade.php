@extends('layout.master')

@section('isi')
<?php  
// require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];

?>
  <main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Kontak</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li>Kontak</li>
      </ol>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">

    <div class="row">

      <div class="col-lg-12">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Koptu Berlian, Lingkungan Krajan Timur, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68126<p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email </h3>
              <p>bernadylandslawu@gmail.com<br>marketingpoint@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <a href="https://wa.me/+6281231230899"><i class="bx bx-phone-call"></a></i>
              <h3>Phone</h3>
              <p><a href="https://wa.me/+6281231230899">+62 812 3123 0899</a></p>
              <p><a href="https://wa.me/+6282359338615">+62 823 5933 8615</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Map Section ======= -->
<section class="map mt-2">
  <div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63192.192514702285!2d113.6420152334!3d-8.15105391793801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6945cc03261bd%3A0xf7d0c1839cf1e71!2sCamelia%20Cluster%20Bernady%20Land%20Slawu!5e0!3m2!1sid!2sid!4v1669767817028!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section><!-- End Map Section -->

</main><!-- End #main -->
@endsection