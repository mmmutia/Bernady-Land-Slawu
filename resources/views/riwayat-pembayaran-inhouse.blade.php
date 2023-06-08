@extends('layout.master')

@section('title', '- Riwayat Pembayaran InHouse')
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
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Status</th>
            <th></th>

        </tr>
    </thead>

    <tbody>
    <tr class="text-center">
      <td><?php echo $no++?></td>
      <td><?php echo $nama_pemesan;?></td>
      <td><?php echo $tgl_pembayaran;?></td>
      <td><img src="./img/bukti_inhouse/<?php echo $row['bukti_pembayaran_inhouse']; ?>"  height="80px"></td>
      <td><?php echo $status;?></td>
      <td>

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
