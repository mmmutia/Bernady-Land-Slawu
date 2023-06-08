@include('partials.navbar-admin-keuangan')

@section('title', '- Data Pemesanan')
@section('isi')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <h1 class="h3 mb-2 text-gray-800">Data Pemesanan Rumah</h1>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT pemesanan_rumah.id_pemesanan_rumah, pemesanan_rumah.nama_pemesan, pemesanan_rumah.alamat, pemesanan_rumah.no_telp_pemesan, pemesanan_rumah.id_cluster, pemesanan_rumah.tgl_pemesanan, pemesanan_rumah.fotocopy_ktp, pemesanan_rumah.jenis_pembayaran FROM pemesanan_rumah ORDER BY id_pemesanan_rumah ASC";
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

                    while ($row = mysqli_fetch_array($result)) {
                        $id_pemesanan_rumah = $row['id_pemesanan_rumah'];
                        $nama_pemesan = $row['nama_pemesan'];
                        $alamat = $row['alamat'];
                        $no_telp_pemesan = $row['no_telp_pemesan'];
                        $id_cluster = $row['id_cluster'];
                        $tgl_pemesanan = $row['tgl_pemesanan'];
                        $jenis_pembayaran = $row['jenis_pembayaran'];
                        $focopy_ktp = $row['fotocopy_ktp'];
                    ?>
                        <tr class="text-center">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $id_pemesanan_rumah; ?></td>
                            <td><?php echo $nama_pemesan; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $no_telp_pemesan; ?></td>
                            <td><?php echo $id_cluster; ?></td>
                            <td><?php echo $tgl_pemesanan; ?></td>
                            <td><?php echo $jenis_pembayaran; ?></td>
                            <td><img src="../img/filepemesanan/<?php echo $row['fotocopy_ktp']; ?>" height="80px"></td>
                            <td>
                                <a href="proses-pemesanan.php?id=<?php echo $row['id_pemesanan_rumah']; ?>" class="btn btn-warning btn-circle <?php echo $dis; ?>"><i class="fa fa-pen"></i></a><br>
                                <a onclick="confirmModal('hapus_pemesanan.php?id=<?php echo $row['id_pemesanan_rumah']; ?>')" class="btn btn-danger btn-circle <?php echo $dis; ?>"><i class="fa fa-trash"></i></a>
                                <!-- <a href="list-pemesanan-admin.php?id=<?php echo $row['id_pemesanan_rumah']; ?>" class="btn btn-danger btn-circle <?php echo $dis; ?>"><i class="fa fa-trash"></i></a> -->
                            </td>
                        </tr>
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
