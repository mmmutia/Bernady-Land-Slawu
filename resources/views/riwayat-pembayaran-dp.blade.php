@extends('layout.master')

@section('title', '- Riwayat Pembayaran DP')
@section('isi')
<main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Riwayat Pembayaran</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index-admin.php">Home</a></li>
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
            <th>Nama Pemesanan</th>
            <th>Tanggal Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Status</th>
            <th></th>

        </tr>
    </thead>
    @foreach ($riwayatpembayarandp as $riwayatdp)
    <tbody>

    <tr class="text-center">
      <td>{{ $riwayatdp->nama_pemesan }}</td>
      <td>{{ $riwayatdp->tgl_pembayaran_dp }}</td>
      <td><img src="images/{{ $riwayatdp->bukti_pembayaran_dp }}"  height="80px"></td>
      <td>{{ $riwayatdp->status_dp }}</td>
      <td>

    </tbody>

    @endforeach
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
