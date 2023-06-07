@extends('layout.master')

@section('title', '- Cluster Tersimpan')
@section('isi')
<?php
// require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi, "select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
$Id_user = $data['id_user'];
$query = mysqli_query($koneksi,"SELECT * from simpan_cluster JOIN cluster ON cluster.id_cluster = simpan_cluster.id_cluster WHERE simpan_cluster.id_user='$Id_user'");
// $data = mysqli_fetch_array($query_mysql);

?>
<main id="main">

<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>
        <blockquote>Cluster Perumahan Yang Tersimpan</blockquote>
      </h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
      </style>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Cluster Perumahan</li>
      </ol>
    </div>

  </div>
</section><!-- End Our Portfolio Section -->

<!-- ======= Portfolio Section ======= -->
<section class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".boulevard">Boulevard Magnolia</li>
          <li data-filter=".camelia">Camelia</li>
          <li data-filter=".gardenia">Edge Gardenia</li>
          <li data-filter=".edge">New Edge Gardenia</li>
          <li data-filter=".pinewood">Pinewood</li>
          <li data-filter=".plumeria">Plumeria</li>
          <li data-filter=".qbix">QBIX</li>
          <li data-filter=".ruko">Ruko</li>
          <li data-filter=".soho">SOHO</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <?php
    while ($item = mysqli_fetch_array($query)){
      ?>
      <div class="col-lg-4 col-md-6 portfolio-wrap <?php echo $item['filter'];?>">
        <div class="portfolio-item">
          <img src="img/boluevard magnolia.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3><?php echo $item['nama_cluster'];?></h3>
            <div>
              <a href="img/gambar9.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-search"></i></a>
              <a href="portofolio-details.php?id_cluster=<?= $item['id_cluster'];?>&id_simpan=<?= $item['id_simpan'];?>" title="Cluster Details"><i class="bx bx-link"></i></a>
              <!-- <a href="portfolio-details-magnolia.php" title="Cluster Details"><i class="fa-regular fa-bookmark fa-xs"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>


    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
