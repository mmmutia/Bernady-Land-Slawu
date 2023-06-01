@extends('layout.master')


@section('isi')
<?php
// require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$userLvl = $_SESSION['level'];

// $id_cluster = $_SESSION['id_cluster'];
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi, "select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
$id_user = $data['id_user'];
// $query = mysqli_fetch_array($query);

if (isset($_POST['hapus'])) {

  $hapus = mysqli_query($koneksi, "DELETE FROM pemesanan_rumah
      WHERE id_pemesanan_rumah = '$id_pemesanan_rumah[id_pemesanan_rumah]'
  ");
}
?>
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
        <li><a href="index-admin.php">Beranda</a></li>
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
            <th>ID Pemesanan Rumah</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>ID Cluster</th>
            <th>Tanggal Pemesanan</th>
            <th>Jenis Pembayaran</th>
            <th>Foto KTP</th>
            <th>Detail Blok</th>
            <th>No Surat Bangunan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query2 = "SELECT * FROM detail_pemesanan JOIN pemesanan_rumah ON detail_pemesanan.id_pemesanan_rumah = pemesanan_rumah.id_pemesanan_rumah JOIN serah_terima ON pemesanan_rumah.id_pemesanan_rumah = serah_terima.id_pemesanan_rumah  WHERE pemesanan_rumah.id_user = '$id_user'";
    $result = mysqli_query($koneksi,$query2);
    $no=1;   
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr class="text-center">
          <td><?php echo $no++?></td>
          <td><?php echo $row['id_pemesanan_rumah'];?></td>
          <td><?php echo $row['nama_pemesan'];?></td>
          <td><?php echo $row['alamat'];?></td>
          <td><?php echo $row['no_telp_pemesan'];?></td>
          <td><?php echo $row['id_cluster'];?></td>
          <td><?php echo $row['tgl_pemesanan'];?></td>
          <td><?php echo $row['jenis_pembayaran'];?></td>
          <td><img src="img/filepemesanan/<?php echo $row['fotocopy_ktp']; ?>"  height="80px"></td>
          <td><?php echo $row['detail_blok'];?></td>
          <td><?php echo $row['no_surat_bangunan'];?></td>
        </tr>
        <?php
      }
      ?>
        
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