@extends('layout.template')
@section('content')
<!-- Page Heading -->
<div class="row">
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran DP</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($pembayarandp as $data)
                        <tr class="text-center">
                            <td>{{ $data->nama_pemesan }}</td>
                            <td>{{ $data->tgl_pembayaran_dp }}</td>
                            <td><img src="images/{{$data->foto_cluster}} " height="80px"></td>
                            <td>{{ $data->status_dp }}</td>
                            <td>
                                <form action="{{ route('statusdp') }}" method="post" role="form" class="php-email-form">
                                    <input type="text" value="{{ $data->id_pemesanan_rumah }}" name="id_pemesanan_rumah" hidden>
                                    @if ($data->status == "Lunas")
                                        <button class="submit" type="submit" name="hapus">Delete</button>
                                    @else
                                        <button class="submit" type="submit" name="konfirmasi">Konfirmasi</button>
                                        @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
