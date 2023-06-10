@extends('layout.master')

@section('title', '- Cluster')
@section('isi')

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
    <form action="{{route('portofolio')}}" method="GET">
        <input type="text" name="cari">
        <input type="submit" value="Search">
        </form>
      </div>
    </div>
  </div>
</div>

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

        @foreach($portofolio as $gambar)
      <div class="col-lg-4 col-md-6 portfolio-wrap {{ $gambar->foto_cluster }}">
        <div class="portfolio-item">
          <img src="images/{{$gambar->foto_cluster}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3>{{ $gambar->nama_cluster }}</h3>
            <div>
              <a href="{{ route('portofolio-details', $gambar->id) }}" title="Cluster Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
