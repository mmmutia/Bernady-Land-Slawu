@include('partials.navbar-admin-keuangan')

@section('title', '- Serah Terima')
@section('isi')
//  <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <h1 class="h3 mb-2 text-gray-800">Data Serah Terima</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-body">
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <!-- <form action="" method="get" role="form" class="php-email-form"> -->
                        <form class="php-email-form" action="../admin/serah-terima.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Id Pemesanan Rumah</label>


                                    <select class="form-control" name="id_pemesanan_rumah" required>
                                        <option value='#'> Pilih Id</option>
                                        <?php

                                        $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
                                        }
                                        ?>


                                    </select>

                                </div><br>
                            <div class="row-md-6 form-group mb-3">
                                <!-- <input type="text" name="blok" class="form-control" id="blok" placeholder="Blok Cluster *" value="" required> -->
                                <input name="no_surat_bangunan" type="text" class="form-control" placeholder="Surat Bangungan *" value="" />
                            </div>
                            <div class="group">
                                <button type="submit" name="tambah" class="btn btn-info btn-md">Simpan</button>
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
        </section><!-- End Contact Section -->
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
