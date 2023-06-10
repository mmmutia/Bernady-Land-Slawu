@extends('layout.template')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">Data Pemesanan Rumah</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Pemesanan Rumah</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>ID Cluster</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Jenis Pembayaran</th>
                        <th>Jumlah Cicilan DP</th>
                        <th>Jumlah Cicilan Inhouse</th>
                        <th>Foto KTP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($listpemesanan as $pelanggan)
                        <tr class="text-center">
                            <td>{{ $pelanggan->id }}</td>
                            <td>{{ $pelanggan->nama_pemesan }}</td>
                            <td>{{ $pelanggan->alamat }}</td>
                            <td>{{ $pelanggan->no_telp }}</td>
                            <td>{{ $pelanggan->id_cluster }}</td>
                            <td>{{ $pelanggan->tgl_pemesanan }}</td>
                            <td>{{ $pelanggan->jenis_pembayaran }}</td>
                            <td>{{ $pelanggan->jumlah_cicilan_dp }}</td>
                            <td>{{ $pelanggan->jumlah_cicilan_inhouse }}</td>
                            <td><img src="images/fc_ktp{{$pelanggan->fc_ktp}}" height="80px"></td>
                            <td>
                                <a href="{{route('proses-pemesanan', $pelanggan->id)}}" class="btn btn-warning btn-circle "><i class="fa fa-pen"></i></a><br>
                                <button>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
