@extends('layout.master-admin')

@section('title', '- Tambah Cluster')
@section('isi')
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
