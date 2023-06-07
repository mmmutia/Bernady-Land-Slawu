@extends('layout.master')

@section('title', '- Cluster')
@section('isi')
<?php
// require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];
$query_mysql = mysqli_query("select * from cluster");

?>
<main id="main">


<main id="main">

<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>
        <blockquote>Cluster Perumahan</blockquote>
      </h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
      </style>
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li>Cluster Perumahan</li>
      </ol>
    </div>

    <div class="col-lg-6">
    <form action="portfolio.php" method="GET">
        <input type="text" name="cari">
        <input type="submit" value="Search">
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$query_mysql = mysqli_query("select * from cluster where nama_cluster like '%".$cari."%'");
}else{
$query_mysql = mysqli_query("select * from cluster");
}
?>

<!-- ======= Portfolio Section ======= -->
<section class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".boulevard">Boulevard Magnolia</li>
          <li data-filter=".camelia">Camelia</li>
          <li data-filter=".edge">Edge Gardenia</li>
          <li data-filter=".newedge">New Edge Gardenia</li>
          <li data-filter=".pinewood">Pinewood</li>
          <li data-filter=".plumeria">Plumeria</li>
          <li data-filter=".qbix">QBIX</li>
          <li data-filter=".ruko">Ruko Avenue 3</li>
          <li data-filter=".soho">SOHO</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <?php
    while ($item = mysqli_fetch_array($query_mysql)){
      ?>
      <div class="col-lg-4 col-md-6 portfolio-wrap <?php echo $item['filter'];?>">
        <div class="portfolio-item">
          <img src="img/images_cluster/<?php echo $item['foto_cluster']; ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3><?php echo $item['nama_cluster'];?></h3>
            <div>
              <a href="portofolio-details.php?id_cluster=<?= $item['id_cluster'];?>" title="Cluster Details"><i class="bx bx-link"></i></a>
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
