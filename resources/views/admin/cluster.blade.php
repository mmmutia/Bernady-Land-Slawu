@extends('layout.master-admin')

@section('title', '- Cluster')
@section('isi')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $userName ?></span>
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <h1 class="h3 mb-2 text-gray-800">Data Cluster</h1>
            <a href="../admin/tambah_cluster.php"><button type="button" class="btn btn-primary ml-4">Tambah Cluster</button></a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Cluster</th>
                                <th>Blok</th>
                                <th>Jumlah Unit</th>
                                <th>Harga</th>
                                <th>Harga DP</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Cluster</th>
                                <th>Blok</th>
                                <th>Jumlah Unit</th>
                                <th>Harga</th>
                                <th>Harga DP</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            $cluster = mysqli_query($koneksi, "SELECT * FROM cluster");
                            while ($row = mysqli_fetch_array($cluster)) {
                                $id_cluster = $row['id_cluster'];
                                $foto_cluster = $row['foto_cluster'];
                                $nama_cluster = $row['nama_cluster'];
                                $blok = $row['blok'];
                                $jumlah_unit = $row['jumlah_unit'];
                                $harga = $row['harga'];
                                $hargaDp = $row['harga_dp'];
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $nama_cluster ?></td>
                                    <td><?php echo $blok ?></td>
                                    <td><?php echo $jumlah_unit ?></td>
                                    <td><?php echo $harga ?></td>
                                    <td><?php echo $hargaDp ?></td>
                                    <td><img src="../img/images_cluster/<?php echo $row['foto_cluster']; ?>" height="60px"></td>
                                    <td>
                                        <a href="../admin/tambah_spek.php?id=<?php echo $row['id_cluster']; ?>" class="btn btn-info btn-circle <?php echo $dis; ?>"><i class="fa fa-plus"></i></a>
                                        <a href="../admin/edit_cluster.php?id=<?php echo $row['id_cluster']; ?>" class="btn btn-warning btn-circle <?php echo $dis; ?>"><i class="fa fa-pen"></i></a>

                                        <a href="javascript:del(<?php echo $row['id_cluster']; ?>)" class="btn btn-danger btn-circle <?php echo $dis; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
