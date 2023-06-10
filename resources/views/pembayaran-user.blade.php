@extends('layout.master')

@section('title', '- Pembayaran')
@section('isi')
 <main id="main">
<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Data Pembayaran </blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index-admin.php">Beranda</a></li>
        <li>Profil</li>
      </ol>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Data Pembayaran Section ======= -->
<section class="pembayaran">
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-header">
        Pembayaran
      </div>
      <div class="card-body">
        <h5 class="card-title">Pembayaran DP Rumah</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <button data-modal-target="#modal-add" class="btn btn-outline-secondary" name="add-pembayaran-dp">Bayar Sekarang</button>
        <a href="/riwayat-pembayaran-dp" class="btn btn-outline-secondary" name="add-pembayaran-dp">Riwayat Pembayaran</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
    </div>
    <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-header">
        Pembayaran
      </div>
      <div class="card-body">
        <h5 class="card-title">Pembayaran InHouse</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <button data-modal-target="#modal-add-inhouse" class="btn btn-outline-secondary" name="add-pembayaran-inhouse">Bayar Sekarang</button>
        <a href="/riwayat-pembayaran-inhouse" class="btn btn-outline-secondary" name="add-pembayaran-inhouse">Riwayat Pembayaran</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>

  </div>

</section>

<!-- Pop up Add -->
<div class="modal-add" id="modal-add">
    <div class="modal-header-add">
      <h2 class="add">Upload Pembayaran DP</h2>
      <!-- <button data-close-add class="close-btn-add">&times;</button> -->

      <div class="modal-body-add">
        <form action="{{route('tambahpembayarandp')}}" method="post" enctype="multipart/form-data">
            @csrf

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Pemesan</label>
            <input type="text" class="form-control" name="nama_pemesan" required></input>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Tanggal Pembayaran DP</label>
            <input type="date" class="form-control" name="tgl_pembayaran_dp" required></input>
            </select>

          </div>

          <div class="form-group">
            <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran DP</label>
            <input type="file" class="form-control" id="bukti_pembayaran_dp" name="bukti_pembayaran_dp" id="bukti_pembayaran_dp" id="foto" required></input>

          </div>


          <div class="align-middle text-center">
            <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-dp">Add</button>
            <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <style>
    .modal-add {
      position: fixed;
      left: 0;
      top: 0;
      background: rgb(0, 0, 0, 0.6);
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;

      z-index: 10000;
    }

    .modal-body-add {
      padding: 10px;
      bottom: 10px;
    }

    .modal-header-add {
      background: white;
      width: 560px;
      max-width: 90%;
      padding: 20px;
      border-radius: 4px;
      position: relative;

    }

    .btn-open {
      background: black;
      padding: 10px 40px;
      color: white;
      border-radius: 5px;
      font-size: 15px;
      cursor: pointer;
    }

    p.add {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    h2.add {
      text-align: center;

    }

    .modal-header-add button.close-btn-add {
      position: absolute;
      right: 10px;
      top: 10px;
      font-size: 32px;
      background: none;
      outline: none;
      border: none;
      cursor: pointer;
    }

    .modal-header-add button.close-btn-add:hover {
      color: #6b46c1;
    }

    .active-add {
      opacity: 1;
      pointer-events: auto;
    }
  </style>
  <script>
    const openModalAdd = document.querySelectorAll("[data-modal-target]");
    const closeModalAdd = document.querySelectorAll(
      "[data-close-add]"
    );

    openModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
      });
    });

    closeModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = button.closest(".modal-add");
        closeModal(modal);
      });
    });

    function openModal(modal) {
      if (modal == null) return;
      modal.classList.add("active-add");
    }

    function closeModal(modal) {
      if (modal == null) return;
      modal.classList.remove("active-add");
    }
  </script>
  <!-- end Pop up Add -->

  <!-- Pop up Add -->
<div class="modal-add" id="modal-add">
    <div class="modal-header-add">
      <h2 class="add">Upload Pembayaran DP</h2>
      <!-- <button data-close-add class="close-btn-add">&times;</button> -->

      <div class="modal-body-add">
        <form action="{{route('tambahpembayarandp')}}" method="post" enctype="multipart/form-data">
            @csrf

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Pemesan</label>
            <input type="text" class="form-control" name="nama_pemesan" required></input>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Tanggal Pembayaran DP</label>


            <input type="date" class="form-control" name="tgl_pembayaran_dp" required></input>

            </select>

          </div>


          <div class="form-group">
            <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran DP</label>
            <input type="file" class="form-control" id="bukti_pembayaran_dp" name="bukti_pembayaran_dp" id="foto" required></input>

          </div>


          <div class="align-middle text-center">
            <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-dp">Add</button>
            <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
          </div>


        </form>
      </div>
    </div>
  </div>
  <style>
    .modal-add {
      position: fixed;
      left: 0;
      top: 0;
      background: rgb(0, 0, 0, 0.6);
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;

      z-index: 10000;
    }

    .modal-body-add {
      padding: 10px;
      bottom: 10px;
    }

    .modal-header-add {
      background: white;
      width: 560px;
      max-width: 90%;
      padding: 20px;
      border-radius: 4px;
      position: relative;

    }

    .btn-open {
      background: black;
      padding: 10px 40px;
      color: white;
      border-radius: 5px;
      font-size: 15px;
      cursor: pointer;
    }

    p.add {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    h2.add {
      text-align: center;

    }

    .modal-header-add button.close-btn-add {
      position: absolute;
      right: 10px;
      top: 10px;
      font-size: 32px;
      background: none;
      outline: none;
      border: none;
      cursor: pointer;
    }

    .modal-header-add button.close-btn-add:hover {
      color: #6b46c1;
    }

    .active-add {
      opacity: 1;
      pointer-events: auto;
    }
  </style>
  <script>
    const openModalAdd = document.querySelectorAll("[data-modal-target]");
    const closeModalAdd = document.querySelectorAll(
      "[data-close-add]"
    );

    openModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
      });
    });

    closeModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = button.closest(".modal-add");
        closeModal(modal);
      });
    });

    function openModal(modal) {
      if (modal == null) return;
      modal.classList.add("active-add");
    }

    function closeModal(modal) {
      if (modal == null) return;
      modal.classList.remove("active-add");
    }
  </script>
  <!-- end Pop up Add -->

<!-- End Data Pembayaran Section -->

  <!-- Pop up Add Inhouse -->
<div class="modal-add-inhouse" id="modal-add-inhouse">
    <div class="modal-header-add">
      <h2 class="add">Upload Pembayaran Inhouse</h2>
      <!-- <button data-close-add class="close-btn-add">&times;</button> -->

      <div class="modal-body-add">
        <form action="{{route('tambahpembayaraninhouse')}}" method="post" enctype="multipart/form-data">
            @csrf

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Pemesan</label>
            <input type="text" class="form-control" name="nama_pemesan" required></input>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Tanggal Pembayaran DP</label>


            <input type="date" class="form-control" name="tgl_pembayaran_inhouse" required></input>

            </select>

          </div>


          <div class="form-group">
            <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran Inhouse</label>
            <input type="file" class="form-control" id="bukti_pembayaran_inhouse" name="bukti_pembayaran_inhouse" id="foto" required></input>

          </div>


          <div class="align-middle text-center">
            <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-inhouse">Add</button>
            <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
          </div>


        </form>
      </div>
    </div>
  </div>
  <style>
    .modal-add-inhouse {
      position: fixed;
      left: 0;
      top: 0;
      background: rgb(0, 0, 0, 0.6);
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;

      z-index: 10000;
    }

    .modal-body-add {
      padding: 10px;
      bottom: 10px;
    }

    .modal-header-add {
      background: white;
      width: 560px;
      max-width: 90%;
      padding: 20px;
      border-radius: 4px;
      position: relative;

    }

    .btn-open {
      background: black;
      padding: 10px 40px;
      color: white;
      border-radius: 5px;
      font-size: 15px;
      cursor: pointer;
    }

    p.add {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    h2.add {
      text-align: center;

    }

    .modal-header-add button.close-btn-add {
      position: absolute;
      right: 10px;
      top: 10px;
      font-size: 32px;
      background: none;
      outline: none;
      border: none;
      cursor: pointer;
    }

    .modal-header-add button.close-btn-add:hover {
      color: #6b46c1;
    }

    .active-add {
      opacity: 1;
      pointer-events: auto;
    }
  </style>
  <script>
    const openModalAdd = document.querySelectorAll("[data-modal-target]");
    const closeModalAdd = document.querySelectorAll(
      "[data-close-add]"
    );

    openModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
      });
    });

    closeModalAdd.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = button.closest(".modal-add-inhouse");
        closeModal(modal);
      });
    });

    function openModal(modal) {
      if (modal == null) return;
      modal.classList.add("active-add");
    }

    function closeModal(modal) {
      if (modal == null) return;
      modal.classList.remove("active-add");
    }
  </script>
  <!-- end Pop up Add -->

@endsection
