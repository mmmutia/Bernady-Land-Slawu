 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.php"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">

                  <ul>
                  <li><a class=" {{ ($title === 'Beranda') ? 'active' : ''}}" href="/">Beranda</a></li>
                  <li><a class=" {{ ($title === 'Tentang') ? 'active' : ''}}" href="/about">Tentang</a></li>
                  <li><a class=" {{ ($title === 'Layanan') ? 'active' : ''}}" href="/services">Layanan</a></li>
                  <li><a class=" {{ ($title === 'Cluster') ? 'active' : ''}}" href="/portofolio">Cluster</a></li>
                  <li><a class=" {{ ($title === 'Tim') ? 'active' : ''}}" href="/team">Tim</a></li>
                  <li><a class=" {{ ($title === 'Kontak') ? 'active' : ''}}" href="/contact">Kontak</a></li>
                  <?php

          if($userName = $_SESSION['name']){

            echo "
          <div class='dropdown' style='margin-right:70px;><a href='#'>
          <a href='#' style='text-decoration: none; color: white;'>
            <img src='img/logo_orang.png' alt='Logo Orang' style='width: 35px; height: 35px; margin-right: 15px; display: inline-block;'>
            <span style='font-size: 14px; display: inline-block;'>$userName</span>
          </a>
          <ul>
                <li> <a href='profile-user.php'>Profil</a></li>
                <li> <a href='list-pemesanan.php'>Pemesanan Rumah</a></li>
                <li> <a href='pembayaran-customer.php'>Pembayaran</a></li>
                <li> <a href='proggres_user.php'>Proggres</a></li>
                <li> <a href='daftar-cluster-tersimpan.php'>Cluster Tersimpan</a></li>
                <li data-bs-toggle='modal' data-bs-target='#modalLogout'> <a href='javascript:void(0)'>Logout</a></li>
              </ul>
            </div>
            ";

          }else{
            echo "
            <li><a href='/login'>Login</a></li>
            ";
          }

          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
