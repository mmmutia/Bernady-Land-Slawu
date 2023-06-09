@extends('layout.template')
@section('content')

<form action="{{route('updatecluster',$cluster->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama_cluster" class="form-label">Nama Cluster</label>
      <input name="nama_cluster" type="text" class="form-control" id="nama_cluster" value="{{$cluster->nama_cluster}}"></input>
    </div>
    <div class="mb-3">
      <label for="blok" class="form-label">blok</label>
      <input name="blok" type="text" class="form-control" id="blok" value="{{$cluster->nama_cluster}}"></input>
    </div>
    <div class="mb-3">
      <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
      <input name="jumlah_unit" type="text" class="form-control" id="jumlah_unit" value="{{$cluster->jumlah_unit}}"></input>
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input name="harga" type="text" class="form-control" id="harga" value="{{$cluster->harga}}"></input>
    </div>
    <div class="mb-3">
      <label for="harga_dp" class="form-label">Harga DP</label>
      <input name="harga_dp" type="text" class="form-control" id="harga_dp" value="{{$cluster->harga_dp}}"></input>
    </div>
    <div class="mb-3">
      <label for="filter" class="form-label">Filter</label>
      <input name="filter" type="text" class="form-control" id="filter" value="{{$cluster->filter}}"></input>
    </div>
    <div class="mb-3">
      <label for="jenis_cluster" class="form-label">Jenis Cluster</label>
      <input name="jenis_cluster" type="text" class="form-control" id="jenis_cluster" value="{{$cluster->jenis_cluster}}"></input>
    </div>
    <div class="mb-3">
      <label for="foto_cluster" class="form-label">Foto Cluster</label>
      <input name="foto_cluster" type="file" class="form-control" id="foto_cluster"></input>
      <img src="images/{{$cluster->foto_cluster}} " width="100px" height="100px" alt="" srcset="">          
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection