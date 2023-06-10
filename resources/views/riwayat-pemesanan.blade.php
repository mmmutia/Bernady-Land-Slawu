@extends('layout.master')

@section('title', '- Pemesanan')
@section('isi')

<main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Data Pemesanan Rumah</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="/homeuser">Beranda</a></li>
        <li>Profil</li>
      </ol>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div  class="container">
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>ID Cluster</th>
            <th>Tanggal Pemesanan</th>
            <th>Jenis Pembayaran</th>
            <th>Jumlah Cicilan DP</th>
            <th>Jumlah Cicilan Inhouse</th>
            <th>Foto KTP</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($riwayatpemesanan as $data)
    <tr class="text-center">
          <td>{{ $data->nama_pemesan }}</td>
          <td>{{ $data->alamat }}</td>
          <td>{{ $data->no_telp }}</td>
          <td>{{ $data->nama_cluster }}</td>
          <td>{{ $data->tgl_pemesanan }}</td>
          <td>{{ $data->jenis_pembayaran }}</td>
          <td>{{ $data->jumlah_cicilan_dp }}</td>
          <td>{{ $data->jumlah_cicilan_inhouse }}</td>
          <td><img src="images/fc_ktp{{$data->fc_ktp}}"  height="80px"></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
  <script>
    $(document).ready(function() {
        $('#example').DataTable({
            scrollX: true,
        });
    });
</script>
<!-- </section>End Contact Section -->

</main>
<!-- End #main -->
@endsection
