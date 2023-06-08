@include('partials.navbar-admin')

@section('title', '- Tambah Spesifikasi Teknis')
@section('isi')
<!-- Begin Page Content -->
<div class="container-fluid">

<?php
$spekId = $_GET['id'];
$query = "SELECT * FROM spesifikasi_teknis JOIN cluster ON cluster.id_cluster=spesifikasi_teknis.id_cluster WHERE spesifikasi_teknis.id_cluster='$spekId'";
$queryy = "SELECT * FROM cluster WHERE id_cluster='$spekId'";
$result = mysqli_query($koneksi, $query);
$resultt = mysqli_query($koneksi, $queryy);
while ($row = mysqli_fetch_array($result)) {
    $spesifikasiId = $row['id_spesifikasi'];
    $pondasi = $row['pondasi'];
    $dinding = $row['dinding'];
    $rangka = $row['rangka_atap'];
    $kusen = $row['kusen'];
    $plafond = $row['plafond'];
    $air = $row['air'];
    $listrik = $row['listrik'];
    $jumlah_kamar = $row['jumlah_kamar'];
    $luas_tanah = $row['luas_tanah'];
    $nama_cluster = $row['nama_cluster'];
}
while ($roww = mysqli_fetch_array($resultt)) {
    $clusterId = $roww['id_cluster'];
}
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Tambah Spesifikasi Cluster <?php echo $nama_cluster ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4 m-auto" style="width: 600px;">
    <div class="card-body">
        <form class="php-email-form" action="" method="POST" enctype="multipart/form-data">
            <div class="col-11 m-auto">
                <div class="row-md-6 form-group mb-3">
                    <input name="id_spesifikasi" type="text" class="form-control" placeholder="id_spesifikasi *" value="<?php echo $spesifikasiId ?>" hidden />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="id_cluster" type="text" class="form-control" placeholder="id_cluster *" value="<?php echo $clusterId ?>" hidden />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="pondasi" type="text" class="form-control" placeholder="Pondasi *" value="<?php echo $pondasi ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="dinding" type="text" class="form-control" placeholder="Dinding *" value="<?php echo $dinding ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="rangka_atap" type="text" class="form-control" placeholder="Rangka Atap *" value="<?php echo $rangka ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="kusen" type="text" class="form-control" placeholder="Kusen *" value="<?php echo $kusen ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="plafond" type="text" class="form-control" placeholder="Plafond *" value="<?php echo $plafond ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="air" type="text" class="form-control" placeholder="Air *" value="<?php echo $air ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="listrik" type="text" class="form-control" placeholder="Listrik *" value="<?php echo $listrik ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="jumlah_kamar" type="text" class="form-control" placeholder="Jumlah Kamar *" value="<?php echo $jumlah_kamar ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="luas_tanah" type="text" class="form-control" placeholder="Luas Tanah *" value="<?php echo $luas_tanah ?>" />
                </div>
                <div class="group" style="text-align: center;">
                    <input type="submit" name="add_spesifikasi" class="btn btn-info btn-md" value="submit">
                </div>
                <!-- <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
<center><button type="submit" class="btn btn-outline-info" name="simpan">Simpan</button></center>
</div> -->
            </div>

            <!-- <div class="form-group mt-3">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
</div> -->
            <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
