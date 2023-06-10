@extends('layout.template')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Cluster</h6>
        <a type="button" class="btn btn-primary mt-4" href="{{route('tambahcluster')}}">Tambah Cluster</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama CLuster</th>
                        <th>Jumlah Unit</th>
                        <th>Blok</th>
                        <th>Harga</th>
                        <th>Filter</th>
                        <th>Jenis Cluster</th>
                        <th>Foto Cluster</th>
                        <th colspan="2" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cluster as $data)
                    <tr>
                        <td>
                            {{$data->nama_cluster}}
                        </td>
                        <td>
                            {{$data->jumlah_unit}}
                        </td>
                        <td>
                            {{$data->blok}}
                        </td>
                        <td>
                            {{$data->harga}}
                        </td>
                        <td>
                            {{$data->filter}}
                        </td>
                        <td>
                            {{$data->jenis_cluster}}
                        </td>
                        <td>
                            <img src="images/{{$data->foto_cluster}} " width="100px" height="100px" alt="" srcset="">
                        </td>
                        <td>
                            <button><a href="{{route('tambahspek', $data->id)}}">Tambah</a></button>
                            <button><a href="{{route('editcluster', $data->id)}}">Edit</a></button>
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
