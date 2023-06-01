@extends('layout.master')

@section('isi')
<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pembayaran'];
$SesLvl = $_SESSION['level'];

$query    = mysqli_query($koneksi, "SELECT * FROM pembayaran_dp INNER JOIN pemesanan_rumah ON pemesanan_rumah.id_pemesanan_rumah=pembayaran_dp.id_pemesanan_rumah WHERE pembayaran_dp.id_pemesanan_rumah='$id_pemesanan_rumah'");
$result   = mysqli_fetch_array($query);

if (isset($_POST['konfirmasi'])) {
    $id = $_POST['id_pemesanan_rumah'];
    $query = "UPDATE pembayaran_dp SET status_dp = 'Lunas' WHERE id_pemesanan_rumah='$id'";
    $result = mysqli_query($koneksi, $query);

    header("location:riwayat-pembayaran-dp.php");
    echo '<script type ="text/JavaScript">';
    echo 'alert("Berhasil Konfirmasi")';
    echo '</script>';
}
if (isset($_POST['hapus'])) {
    $id = $_POST['id_pemesanan_rumah'];
    $query1 = mysqli_query($koneksi,"DELETE FROM pembayaran_dp WHERE id_pemesanan_rumah='$id'") or die(mysqli_error($koneksi));
    header("location:riwayat-pembayaran-dp.php");
    // $result = mysqli_query($koneksi, $query1); 
}
?>
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
            <th>Nama Pemesanan</th>
            <th>Tanggal Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Status</th>
            <th></th>
            
        </tr>
    </thead>

    <tbody>
    <?php
    $query = "SELECT * from pembayaran_dp join pemesanan_rumah on pembayaran_dp.id_pemesanan_rumah=pemesanan_rumah.id_pemesanan_rumah";
    $result = mysqli_query($koneksi, $query);
    $no=1;
    // if ($SesLvl == 2){
    //   $dis = "";
    // } else if ($SesLvl == 1){
    //   $dis = "disabled";
    // } else if ($SesLvl == 3){
    //   $dis = "disabled";
    // } else ($SesLvl == 4){
    //   $dis = "disabled";
    // } 
    ?>
    <?php
    while($row = mysqli_fetch_array($result)){
      $nama_pemesan = $row['nama_pemesan'];
      $tgl_pembayaran = $row['tgl_pembayaran_dp'];
      $bukti_foto = $row['bukti_pembayaran_dp'];
      $status = $row['status_dp'];
      ?>
    <tr class="text-center">
      <td><?php echo $no++?></td>
      <td><?php echo $nama_pemesan;?></td>
      <td><?php echo $tgl_pembayaran;?></td>
      <td><img src="img/pembayaran_dp/<?php echo $row['bukti_pembayaran_dp']; ?>"  height="80px"></td>
      <td><?php echo $status;?></td>
      <td>
      
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