@include('partials.navbar-admin-keuangan')

@section('title', '- Riwayat Pembayaran Inhouse')
@section('isi')
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
