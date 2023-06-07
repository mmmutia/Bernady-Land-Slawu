@extends('layout.master')

@section('title', '- Profil')
@section('isi')
<?php
// require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$userLvl = $_SESSION['level'];
// $id_user = $_SESSION['id_user'];

$query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
?>
 <main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Profile</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Profile</li>
      </ol>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <h1 class="text-center"><span>Profile</span></h1>
            <div class="row-md-6 form-group mb-3">
              <input type="text" name="name" class="form-control" id="name" value="<?php echo $data['user_fullname'];?>" required disabled>
            </div>
            <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['user_email'];?>" required disabled>
            </div>
            <div class="row-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="password" id="password" value="<?php echo $data['user_password'];?>" required disabled>
            </div>
          </div>
          <!-- <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
          </div> -->
          <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
