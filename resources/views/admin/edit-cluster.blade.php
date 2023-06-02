@extends('layout.master-admin')


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
        <h1 class="h3 mb-2 text-gray-800 text-center">Edit Cluster <?php echo $nama_cluster ?></h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4 m-auto" style="width: 600px;">
            <div class="card-body">
                <form class="php-email-form" action="../admin/edit_cluster.php" method="POST" enctype="multipart/form-data">
                    <div class="col">
                        <h1 class="text-center"><span>Update Cluster</span></h1>
                        <div>
                            <label>ID Cluster</label>
                            <input type="hidden" name="txt_id" value="<?php echo $clusterId; ?>" />
                        </div>
                        <div class="row-md-6 form-group mb-3">
                            <label>Nama Cluster</label>
                            <input class="form-control" type="text" name="txt_namacluster" value="<?php echo $nama_cluster; ?>" autofocus="" />
                        </div>
                        <div class="row-md-6 form-group mb-3">
                            <label>Blok</label>
                            <input class="form-control" type="text" name="txt_blok" value="<?php echo $blok; ?>" />
                        </div>
                        <div class="row-md-6 form-group mb-3">
                            <label>Unit</label>
                            <input class="form-control" type="text" name="jumlah_unit" value="<?php echo $jumlah_unit; ?>" />
                        </div>
                        <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                            <label>Harga</label>
                            <input class="form-control" type="text" name="harga" value="<?php echo $harga; ?>" />
                        </div>
                        <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                            <label>Harga DP</label>
                            <input class="form-control" type="text" name="harga_dp" value="<?php echo $hargaDp; ?>" />
                        </div>
                    </div>
                    <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                        <label>Foto Cluster</label>
                        <div class="image-wrapper">
                            <img src="img/images_cluster/<?php echo $row['foto_cluster'] ?>">
                        </div>
                        <input type="file" name="txt_fotocluster" value="" />
                        <input type="hidden" name="txt_fotoclusterlama" value="<?php echo $row['foto_cluster']; ?>" />
                    </div>
                    <div class="group">
                        <input type="submit" name="update" class="btn btn-info btn-md" value="Update">
                    </div>
                    <!-- <div class="row-md-6 form-group mt-3 mt-md-0 mb-3"> 
    <center><button type="submit" class="btn btn-outline-info" name="Update">Update</button></center>
    </div> -->
            </div>

            <!-- <div class="form-group mt-3">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
  </div> -->
            <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
            </form>
        </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->