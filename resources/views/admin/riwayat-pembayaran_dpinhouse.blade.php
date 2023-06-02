@include('partials.navbar-admin-keuangan')

@yield('isi')
<?php
// require('../koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$SesLvl = $_SESSION['level'];

$query    = mysqli_query($koneksi, "SELECT * FROM pembayaran_inhouse JOIN pemesanan_rumah ON pemesanan_rumah.id_pemesanan_rumah=pembayaran_inhouse.id_pemesanan_rumah WHERE pembayaran_inhouse.id_pemesanan_rumah='$id_pemesanan_rumah'");
$result   = mysqli_fetch_array($query);

if (isset($_POST['konfirmasi'])) {
    $id = $_POST['id_pemesanan_rumah'];
    $query = "UPDATE pembayaran_inhouse SET status_inhouse = 'Lunas' WHERE id_pemesanan_rumah='$id'";
    $result = mysqli_query($koneksi, $query);

    header("location:../admin/riwayat-pembayaran-inhouseadmin.php");
    echo '<script type ="text/JavaScript">';
    echo 'alert("Berhasil Konfirmasi")';
    echo '</script>';
}
if (isset($_POST['hapus'])) {
    $id = $_POST['id_pemesanan_rumah'];
    $query1 = mysqli_query($koneksi, "DELETE FROM pembayaran_inhouse WHERE id_pemesanan_rumah='$id'") or die(mysqli_error($koneksi));
    header("location:../admin/riwayat-pembayaran-inhouseadmin.php");
    // $result = mysqli_query($koneksi, $query1); 
}
if (!isset($_SESSION['name'])) {
    header('Location: ../index.php');
}
?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran InHouse</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <?php
                    $query = "SELECT * from pembayaran_inhouse join pemesanan_rumah on pembayaran_inhouse.id_pemesanan_rumah=pemesanan_rumah.id_pemesanan_rumah";
                    $result = mysqli_query($koneksi, $query);
                    $no = 1;
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
                    while ($row = mysqli_fetch_array($result)) {
                        $id_pemesanan_rumah = $row['id_pemesanan_rumah'];
                        $nama_pemesan = $row['nama_pemesan'];
                        $tgl_pembayaran = $row['tgl_pembayaran_inhouse'];
                        $bukti_foto = $row['bukti_pembayaran_inhouse'];
                        $status = $row['status_inhouse'];
                    ?>
                        <tr class="text-center">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $nama_pemesan; ?></td>
                            <td><?php echo $tgl_pembayaran; ?></td>
                            <td><img src="../img/bukti_inhouse/<?php echo $row['bukti_pembayaran_inhouse']; ?>" height="80px"></td>
                            <td><?php echo $status; ?></td>
                            <td>
                                <form action="../admin/riwayat-pembayaran-inhouseadmin.php" method="post" role="form" class="php-email-form">
                                    <input type="text" value="<?php echo $id_pemesanan_rumah; ?>" name="id_pemesanan_rumah" hidden>
                                    <?php if ($status == "Lunas") {
                                    ?>
                                        <button class="submit" type="submit" name="hapus">Delete</button>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="submit" type="submit" name="konfirmasi">Konfirmasi</button>
                                    <?php
                                    } ?>
                                </form>
                            </td>

                        <?php
                    }
                        ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->