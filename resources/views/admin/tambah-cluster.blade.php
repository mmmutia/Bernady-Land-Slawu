@extends('layout.master-admin')


@section('isi')
<?php
require('../koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi, "select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
if (isset($_POST['tambah'])) {
    // $Id_user = $_POST['txt_id_user'];
    // $foto = $_FILES['foto_cluster']['name'];
    // $temp = $_FILES['foto_cluster']['tmp_name'];

    $nama_cluster = $_POST['txt_namacluster'];
    $blok = $_POST['txt_blok'];
    $jumlah_unit = $_POST['jumlah_unit'];
    $harga = $_POST['harga'];
    $hargaDp = $_POST['hargaDp'];
    $filter = $_POST['filter'];
    $jenis_cluster = $_POST['jenis_cluster'];
    // $filter = $_POST['txt_filter'];
    $target_dir = "img/images_cluster/";
    $target_file = $target_dir . basename($_FILES["txt_fotocluster"]["name"]);
    $uploadcluster = $_FILES['txt_fotocluster']['name'];
    $filecluster = $_FILES['temp_name'];
    $image_files = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["txt_fotocluster"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["txt_fotocluster"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


    $query = "INSERT INTO cluster(nama_cluster,blok,jumlah_unit,harga,harga_dp,filter,jenis_cluster,foto_cluster) VALUES ('$nama_cluster','$blok','$jumlah_unit','$harga','$hargaDp','$filter','$jenis_cluster','$uploadcluster')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Telah Berhasil Disimpan');window.location='cluster.php'</script>";
    }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Cluster</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4 m-auto" style="width: 600px;">
    <div class="card-body">
        <form class="php-email-form" action="../admin/tambah_cluster.php" method="POST" enctype="multipart/form-data">
            <div class="col-11 m-auto">
                <div class="row-md-6 form-group mb-3">
                    <!-- <input type="text" name="nama_cluster" class="form-control" id="nama_cluster" placeholder="Nama Cluster *" value="" required> -->
                    <input type="text" name="txt_namacluster" class="form-control" placeholder="Nama Cluster *" value="">
                </div>
                <div class="row-md-6 form-group mb-3">
                    <!-- <input type="text" name="blok" class="form-control" id="blok" placeholder="Blok Cluster *" value="" required> -->
                    <input name="txt_blok" type="text" class="form-control" placeholder="Blok Cluster *" value="" />
                </div>
                <div class="row-md-6 form-group mb-3">
                    <!-- <input type="text" name="jumlah_unit" class="form-control" id="jumlah_unit" placeholder="Jumlah Unit Rumah *" value="" required> -->
                    <input type="text" name="jumlah_unit" class="form-control" placeholder="Jumlah Unit Rumah *" value="">
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                    <!-- <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga *" value="" required > -->
                    <input type="text" class="form-control" name="harga" placeholder="Harga *" value="">
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                    <!-- <input type="text" class="form-control" name="hargaDp" id="hargaDp" placeholder="Harga DP*" value="" required > -->
                    <input type="text" class="form-control" name="hargaDp" placeholder="Harga DP*" value="">
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                    <!-- <input type="text" class="form-control" name="hargaDp" id="hargaDp" placeholder="Harga DP*" value="" required > -->
                    <input type="text" class="form-control" name="filter" placeholder="Masukkan Filter*" value="">
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                <select class="form-control" name="jenis_cluster">
                    <option>-- Pilih Jenis Cluster --</option>
                    <option>Subsidi</option>
                    <option>Non-Subsidi</option>
                 </select>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                    <label>Foto Cluster</label>
                    <input type="file" name="txt_fotocluster" class="form-control">
                </div>
                <input type="submit" name="tambah" class="btn btn-info btn-md" value="submit">
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->