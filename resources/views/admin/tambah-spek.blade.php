@extends('layout.template')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Tambah Spesifikasi Cluster</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4 m-auto" style="width: 600px;">
    <div class="card-body">
        <form class="php-email-form" action="{{ route('prosestambahspek') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-11 m-auto">
                <div class="row-md-6 form-group mb-3">
                    <input name="id_cluster" type="text" class="form-control" placeholder="Id Cluster *" id="id_cluster"/></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="pondasi" type="text" class="form-control" placeholder="Pondasi *" id="pondasi"/></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="dinding" type="text" class="form-control" placeholder="Dinding *" id="dinding"/></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="rangka_atap" type="text" class="form-control" placeholder="Rangka Atap *" id="rangka_atap" /></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="kusen" type="text" class="form-control" placeholder="Kusen *" id="kusen" /></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="plafond" type="text" class="form-control" placeholder="Plafond *" id = "plafond"/></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="air" type="text" class="form-control" placeholder="Air *" id="air" /></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="listrik" type="text" class="form-control" placeholder="Listrik *" id="listrik" /></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="jumlah_kamar" type="text" class="form-control" placeholder="Jumlah Kamar *" id="jumlah_kamar" /></input>
                </div>
                <div class="row-md-6 form-group mb-3">
                    <input name="luas_tanah" type="text" class="form-control" placeholder="Luas Tanah *" id="luas_tanah" /></input>
                </div>
                <div class="group" style="text-align: center;">
                    <input type="submit" class="btn btn-info btn-md" value="submit">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
