@extends('layout.master')

@section('title', '- Detail Cluster')
@section('isi')

<main id="main">

    $cluster = Cluster::all();
<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Cluster Details</h2>
      <ol>
        <li><a href="/homeuser">Home</a></li>
        <li><a href="/portofolio">Cluster</a></li>
        <li>{{$cluster->nama_cluster}} Details</li>
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
              <img src="images/{{$spek->foto_cluster}}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="images/{{$spek->foto_cluster}}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="images/{{$spek->foto_cluster}}" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>


      <div class="col-lg-4">
        <form action="{{ route('portofolio-details', $spek->id)->$data->id }}" method="post">
          <div class="portfolio-info">
            <h3>{{ $spek->nama_cluster }}</h3>
            @foreach ($spek as $data)
            <ul>
              <li><strong>Pondasi</strong>: {{ $data->pondasi }}</li>
              <li><strong>Dinding</strong>: {{ $data->dinding }}</li>
              <li><strong>Rangka Atap</strong>: {{ $data->rangka_atap }}</li>
              <li><strong>Kusen</strong>: {{ $data->kusen }}</li>
              <li><strong>Plafond</strong>: {{ $data->plafond }}</li>
              <li><strong>Air</strong>: {{ $data->air }}</li>
              <li><strong>Listrik </strong>: {{ $data->listrik }}</li>
              <li><strong>Jumlah Kamar</strong>: {{ $data->jumlah_kamar }}</li>
              <li><strong>Luas Tanah</strong>: {{ $data->luas_tanah }}</li>
              <li><strong>Jenis Cluster</strong>: {{ $data->jenis_cluster }}</li>
              <div class="portfolio-description">
            <h2>Harga : <?php echo $result['harga'] ?></h2>
          </div>
              <a href="pemesanan.php"><button type="button" class="btn btn-secondary">Pesan Rumah Ini</button></a>
              <button type="submit" name="simpan" class="btn btn-dark">Simpan</button>
            </ul>

            @endforeach
          </div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
