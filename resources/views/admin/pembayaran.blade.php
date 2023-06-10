@extends('layout.template')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="row">
    <h1 class="h3 mb-2 text-gray-800">Data Cluster</h1>
    <a href="../admin/tambah_cluster.php"><button type="button" class="btn btn-primary ml-4">Tambah Cluster</button></a>
</div> -->
<!-- DataTales Example -->
<section class="pembayaran">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Data Pembayaran
            </div>
            <div class="card-body">
                <h3 class="card-title">Pembayaran DP</h3>
                <a href="{{ route('riwayat-pembayaran-dpadmin') }}" class="btn btn-outline-secondary">Lihat Data</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div> <br>
        <br>
        <div class="card text-center">
            <div class="card-header">
                Data Pembayaran
            </div>
            <div class="card-body">
                <h3 class="card-title">Pembayaran InHouse</h3>
                <a href="{{ route('riwayat-pembayaran-inhouseadmin') }}" class="btn btn-outline-secondary">Lihat Data</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div> <br>
        <br>
        <div class="card text-center">
            <div class="card-header">
                Data Serah Terima
            </div>
            <div class="card-body">
                <h3 class="card-title">Serah Terima</h3>
                <a href="{{ route('serah-terima-admin') }}" class="btn btn-outline-secondary">Tambah Data</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>

        </div>

</section>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@endsection
