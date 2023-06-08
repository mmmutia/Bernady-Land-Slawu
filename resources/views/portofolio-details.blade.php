@extends('layout.master')

@section('title', '- Detail Cluster')
@section('isi')

<main id="main">

<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Cluster Details</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li><a href="portfolio.php">Cluster</a></li>
        <li><?php echo $result['nama_cluster'] ?> Details</li>
      </ol>
    </div>

  </div>
</section><!-- End Our Portfolio Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
            </div>

            <div class="swiper-slide">
              <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
            </div>

            <div class="swiper-slide">
              <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>


      <div class="col-lg-4">
        <form action="portofolio-details.php?id_cluster=<?= $_GET['id_cluster']?>&id_simpan=<?= $_GET['id_simpan'] ?>" method="post">
          <div class="portfolio-info">
            <h3><?php echo $result['nama_cluster'] ?></h3>
            <ul>
              <li><strong>Pondasi</strong>: <?php echo $result['pondasi'] ?></li>
              <li><strong>Dinding</strong>: <?php echo $result['dinding'] ?></li>
              <li><strong>Rangka Atap</strong>: <?php echo $result['rangka_atap'] ?></li>
              <li><strong>Kusen</strong>: <?php echo $result['kusen'] ?></li>
              <li><strong>Plafond</strong>: <?php echo $result['plafond'] ?></li>
              <li><strong>Air</strong>: <?php echo $result['air'] ?></li>
              <li><strong>Listrik </strong>: <?php echo $result['listrik'] ?></li>
              <li><strong>Jumlah Kamar</strong>: <?php echo $result['jumlah_kamar'] ?></li>
              <li><strong>Luas Tanah</strong>: <?php echo $result['luas_tanah'] ?></li>
              <li><strong>Jenis Cluster</strong>: <?php echo $result['jenis_cluster'] ?></li>
              <div class="portfolio-description">
            <h2>Harga : <?php echo $result['harga'] ?></h2>
          </div>
              <a href="pemesanan.php"><button type="button" class="btn btn-secondary">Pesan Rumah Ini</button></a>
              <button type="submit" name="simpan" class="btn btn-dark">Simpan</button>
            </ul>
          </div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
