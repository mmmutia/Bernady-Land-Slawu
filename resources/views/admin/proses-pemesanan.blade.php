@include('partials.navbar-admin-keuangan')

@section('title', '- Proses Pemesanan')
@section('isi')
 <!-- Begin Page Content -->
 <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Pemesanan <?php echo $nama_cluster ?></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 m-auto" style="width: 600px;">
                        <div class="card-body">
            <form action="forms/contact.php" method="get" role="form" class="php-email-form">
              <div class="col">
                <h1 class="text-center"><span>Data Pemesan</span></h1>
                <div class="row-md-6 form-group mb-3">
                  <input type="text" name="idpemesan" class="form-control" id="idpemesan" value="<?php echo $data['id_pemesanan_rumah'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mb-3">
                  <input type="text" name="namapemesan" class="form-control" id="namapemesan" value="<?php echo $data['nama_pemesan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="notelp" id="notelp" value="<?php echo $data['no_telp_pemesan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="idcluster" id="idcluster" value="<?php echo $data['id_cluster'];?>" required readonly >
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="tglpemesan" id="tglpemesan" value="<?php echo $data['tgl_pemesanan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="jenispembayaran" id="jenispembayaran" value="<?php echo $data['jenis_pembayaran'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                <img src="../img/filepemesanan/<?php echo $data['fotocopy_ktp']; ?>"  height="200px">
                </div>
              </div>

              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
              </div> -->
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
            </form>
          </div>
          <div class="col">
                <h1 class="text-center"><span> Detail Blok Rumah </span></h1>
          <div class="col-lg-4 m-auto">
          <form action="" method="post" >
              <div class="row">
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="id_pemesanan_rumah" class="form-control" id="id_pemesanan_rumah" placeholder="Masukkan ID Pemesanan Rumah" value="<?php echo $data['id_pemesanan_rumah'];?>">
                  <input type="text" name="id_detail_pemesanan" class="form-control" id="id_detail_pemesanan" placeholder="Masukkan ID Pemesanan Rumah" value="<?php echo $dataa['id_detail_pemesanan'];?>" hidden>
                </div>
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="detail_blok" class="form-control" id="detail_blok" placeholder="Masukkan Blok" value="<?php echo $dataa['detail_blok'];?>">
                </div>
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="jumlah_dp" class="form-control" id="jumlah_dp" placeholder="Jumlah DP" value="<?php echo $dataa['jumlah_dp'];?>">
                </div>
                <div class="form-group mb-3 text-center">
                  <button type="submit" class="btn btn-outline-info" name="add_detail" style="width: 400px; margin-left: -100px;">Simpan</button>
                </div>
            </form>
                    </div>
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
