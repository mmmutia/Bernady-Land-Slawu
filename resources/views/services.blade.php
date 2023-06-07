@extends('layout.master')

@section('title', '- Layanan')
@section('isi')
<main id="main">

<!-- ======= Our Services Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Layanan Kami</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li>Layanan</li>
      </ol>
    </div>

  </div>
</section><!-- End Our Services Section -->

<!-- ======= Services Section ======= -->
<section class="services">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
        <div class="icon-box icon-box-pink">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="portfolio.php">Properti Baru</a></h4>
          <p class="description">Berada di pusat area residential Jember, yang akan menjadi pusat bisnis terbaru Kota Jember. Memenuhi berbagai kebutuhan anda dimulai dari furniture, seperti menggunakan Smart Lock.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-cyan">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="portfolio.php">Cluster Perumahan</a></h4>
          <p class="description">Berbagai macam Cluster yang sangat diimpikian diantaranya, Boluevard Magnolia, Camelia, Ege Gardenia, New Edge Gardenia, Pinewood, Plumeria, QBIX, Ruko, SOHO.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-green">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href="portfolio.php">Pesan Rumah</a></h4>
          <p class="description">Segera miliki hunian nyaman dan bernilai investasi tinggi diberbagai Cluster unggulan dan  didukung dengan sistem keamanan 24 jam.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-blue">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href="services.php">Fasilitas</a></h4>
          <p class="description">Bernady Land Slawu menghadirkan Mall, Hotel, SPBU, Bernady Camp, Cendani Park, Still Autocare dan lainnya.</p>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Services Section -->

<!-- ======= Service Details Section ======= -->
<section class="service-details">
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/mall.jpeg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Mall</a></h5>
            <p class="card-text">Menjadi pusat perbelanjaan yang secara arsitektur berupa bangunan tertutup dengan suhu yang diatur dan memiliki jalur untuk berjalan jalan yang teratur sehingga berada di antara antar toko-toko kecil yang saling berhadapan yang memudahkan penghuni Bernady Land untuk berbelanja kebutuhan sehari-hari</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/hotel.jpg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Hotel</a></h5>
            <p class="card-text">Menjadikan sebuah bangunan atau usaha yang menyediakan jasa inap dan juga menyediakan makanan dan minuman bagi tamu yang datang serta mempunyai fasilitas jasa lannya. Yang mana semua fasilitasnya juga di peruntukkan bagi masyarakat umum.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>

      </div>
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/spbu.jpg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">SPBU</a></h5>
            <p class="card-text">(Stasiun Pengisian Bahan Bakar untuk Umum) merupakan prasarana umum yang disediakan oleh PT. Pertamina untuk masyarakat luas guna memenuhi kebutuhan bahan bakar. Pada umumnya SPBU menjual bahan bakar sejenis premium, solar, pertamax dan pertamax plus.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/cendani-park.jpg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Cendani Park</a></h5>
            <p class="card-text">Sebuah area yang mempunyai ruang dalam berbagai kondisi. Kondisi yang dimaksud diantaranya lokasi, ukuran atau luasan, iklim, dan kondisi khusus lainnya seperti tujuan serta fungsi spesifik dari pembangunan taman.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/bernady-camp.jpeg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Bernady Camp</a></h5>
            <p class="card-text">Merupakan lokasi untuk mendirikan tenda dan melakukan kegiatan berkemah, berupa ruang luas di luar ruangan.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card">
          <div class="card-img">
            <img src="img/stil-autocare.jpg" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">STIL Autocare</a></h5>
            <p class="card-text">Sebagai tempat dimana di dalamnya terjadi aktifitas kegiatan perbengkelan yang meliputi perawatan guna menjaga keawetan mobil dan perbaikan guna memperbaiki segala sesuatu yang rusak pada mobil, sehingga kondisi mobil kembali baik dan sempurna.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Service Details Section -->

</main><!-- End #main -->
@endsection
