@extends('layout.master')


@section('isi')
<main id="main">

<!-- ======= About Us Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote> Tentang Bernady</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li>Tentang Bernady</li>
      </ol>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= About Section ======= -->
<section class="about" data-aos="fade-up">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <img src="img/bg-bernady.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h3>Bernady Land Slawu</h3><br>
        <p class="fst-italic">
         Terletak di tengah-tengah wilayah Kota yang berbentuk menyerupai hati menjadikan kawasan Bernady Land Slawu sebagai pusat dimana
         hati sebagai tempat yang paling nyaman berada. Hunian yang dibuat dengan estetika yang modern dan futuristik memberikan kesan ekslusif.
         Kawasan hijau yang masih alami serta asri memberikan aura positif dan semangat. Tidak hanya sebagai rumah, kami membangun impian dimana
         semua orang menjadikan hati sebagai awal dan tujuan.
        </p>

      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section class="facts section-bg" data-aos="fade-up">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Camelia</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
        <p>Pinewood</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
        <p>Plumeria</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
        <p>Gardenia</p>
      </div>

    </div>

  </div>
</section><!-- End Facts Section -->

<!-- ======= Our Skills Section ======= -->
<section class="skills" data-aos="fade-up">
  <div class="container">

    <div class="section-title">
      <h2>Rumah Modern Minimalis & Strategis Bernady Land Slawu</h2>
      <p>Kawasan rumah exclusive di tengah Kota Jember. Dengan bangunan berkualitas dari developer yang terpercaya.Kawasan yang memiliki sirkulasi udara lebih sejuk dan lokasi yang nyaman. </p>
    </div>


    <div class="skills-content">

      <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <span class="skill">Camelia <i class="val">100%</i></span>
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
          <span class="skill">Pinewood <i class="val">90%</i></span>
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          <span class="skill">Plumeria <i class="val">75%</i></span>
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
          <span class="skill">QBIX<i class="val">55%</i></span>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Our Skills Section -->

<!-- ======= Tetstimonials Section ======= -->
<section class="testimonials" data-aos="fade-up">
  <div class="container">

    <div class="section-title">
      <h2>Bernady Land Slawu</h2>
      <p>Menjadikan kawasan Bernady Land Slawu sebagai pusat dimana hati sebagai tempat paling nyaman berada - Bernady Land Slawu</p>
    </div>

    <div class="section-title">
      <p>Perumahan Bernady Land Jember Hunian mewah dengan view pegunungan, design nuansa Bali, dan lokasi strategis dekat dengan pusat kota. Dengan akses jalan yang ekstra lebar, hunian ini merupakan investasi properti terbaik di kota Jember. Karena Bernady Land Slawu di kembangkan menjadi kawasan kota mandiri di Jember.</p>
      </div>

  </div>
</section><!-- End Ttstimonials Section -->

</main><!-- End #main -->
@endsection
