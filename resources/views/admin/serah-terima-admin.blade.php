@extends('layout.template')
@section('content')

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
                        <form class="php-email-form" action="{{ route('prosestambahserahterima') }}" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Id Pemesanan Rumah</label>


                                    <select class="form-control" name="id_pemesanan_rumah" required>
                                        <option value='#'> Pilih Id</option>
                                        <select>{{ $serahterima->id_pemesanan_rumah}}</select>
                                </div><br>
                            <div class="row-md-6 form-group mb-3">
                                <!-- <input type="text" name="blok" class="form-control" id="blok" placeholder="Blok Cluster *" value="" required> -->
                                <input name="no_surat_bangunan" type="text" class="form-control" placeholder="Surat Bangungan *" value="" required></input>
                            </div>
                            <div class="group">
                                <button type="submit" name="tambah" class="btn btn-info btn-md">Simpan</button>
                            </div>
                       </div>
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
@endsection
