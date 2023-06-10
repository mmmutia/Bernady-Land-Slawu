@extends('layout.template')
@section('content')
<!-- Page Heading -->
<div class="container">
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <button data-modal-target="#modal-add" class="">Tambah Proggres</button>

      </div>
    </div>

    <br></br>
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <h1 class="h3 mb-2 text-gray-800">Data Pemesanan Rumah</h1>

      </div>
      <!-- DataTales Example -->
      <div class="card shadow mb-4 mt-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id Pemesanan</th>
                  <th>Id User</th>
                  <th>Nama Pemesan</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($progres as $data)
              <tbody>
                  <tr class="text-center">
                    <td>{{ $data->id_pemesanan_rumah }}</td>
                    <td>{{ $data->id_user }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>
                      <div class="align-items-center">
                        <button data-modal-target="#modal-keterangan{{ $data->id }}" class="">Lihat Keterangan</button>
                      </div>

          </div>
        </div>
      </div>

    </div>



    <style>
      .modal-delete {
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

      .modal-body-delete {
        padding: 10px;
        bottom: 10px;
      }

      .modal-header-delete {
        background: white;
        width: 560px;
        max-width: 90%;
        padding: 20px;
        border-radius: 4x;
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

      p.delete {
        line-height: 1.6;
        margin-bottom: 20px;
        text-align: center;
      }

      h2.delete {
        text-align: center;

      }

      .modal-header-delete button.close-btn-delete {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 32px;
        background: none;
        outline: none;
        border: none;
        cursor: pointer;
      }

      .modal-header-delete button.close-btn-delete:hover {
        color: #6b46c1;
      }

      .active-delete {
        opacity: 1;
        pointer-events: auto;
      }
    </style>
    <script>
      const openModalDelete = document.querySelectorAll("[data-modal-target]");
      const closeModalDelete = document.querySelectorAll(
        "[data-close-delete]"
      );

      openModalDelete.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = document.querySelector(button.dataset.modalTarget);
          openModal(modal);
        });
      });

      closeModalDelete.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = button.closest(".modal-delete");
          closeModal(modal);
        });
      });

      function openModal(modal) {
        if (modal == null) return;
        modal.classList.add("active-delete");
      }

      function closeModal(modal) {
        if (modal == null) return;
        modal.classList.remove("active-delete");
      }
    </script>
    <!-- end Pop up Delete -->


    <!-- Pop up Edit -->
    <div class="modal-edit" id="modal-edit{{ $data->id }}">
      <div class="modal-header-edit">
        <h2 class="edit">Edit Form</h2>
        <!-- <button data-close-add class="close-btn-add">&times;</button> -->

        <div class="modal-body-edit">
          <form action="{{route('progres', $data->id)}}" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleFormControlSelect1">Id User</label>


              <select class="form-control" name="id_user_edit" required>
                <option value='{{ $data->id_user }}'> {{ $data->nama_pemesan }}</option>


              </select>

            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Id Pemesanan</label>


              <select class="form-control" name="id_pemesanan_edit" required>
                <option value='{{ $data->id_pemesanan_rumah }}'>{{ $data->id_pemesanan_rumah }} - {{ $data->nama_pemesan }}</option>

              </select>

            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>


              <select class="form-control" name="status_edit" required>
                <option value="{{ $data->status }}">{{ $data->status }}</option>
                <option value="Selesai">Selesai</option>
                <option value="Pengerjaan">Pengerjaan</option>

              </select>

            </div>



            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan_edit" placeholder="Enter Address" maxlength="500" rows="2">{{ $data->keterangan }}</textarea>
            </div>


            <div class="form-group">
              <label class="custom-file-label" for="customFileLang">Upload Proggres</label>
              <input type="file" class="form-control" id="foto" name="fotoedit" id="foto">

            </div>


            <div class="align-middle text-center">
              <button class="btn btn-success btn-sm ms-auto" id="add-user" name="edit-user">Add</button>
              <button class="btn btn-danger btn-sm ms-auto" data-close-edit>Close</button>
            </div>


          </form>
        </div>
      </div>
    </div>
    <style>
      .modal-edit {
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
        z-index: 1000000;
      }

      .modal-body-edit {
        padding: 10px;
        bottom: 10px;
      }

      .modal-header-edit {
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

      p.edit {
        line-height: 1.6;
        margin-bottom: 20px;
      }

      h2.edit {
        text-align: center;

      }

      .modal-header-edit button.close-btn-edit {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 32px;
        background: none;
        outline: none;
        border: none;
        cursor: pointer;
      }

      .modal-header-edit button.close-btn-edit:hover {
        color: #6b46c1;
      }

      .active-edit {
        opacity: 1;
        pointer-events: auto;
      }
    </style>
    <script>
      const openModalEdit = document.querySelectorAll("[data-modal-target]");
      const closeModalEdit = document.querySelectorAll(
        "[data-close-edit]"
      );

      openModalEdit.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = document.querySelector(button.dataset.modalTarget);
          openModal(modal);
        });
      });

      closeModalEdit.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = button.closest(".modal-edit");
          closeModal(modal);
        });
      });

      function openModal(modal) {
        if (modal == null) return;
        modal.classList.add("active-edit");
      }

      function closeModal(modal) {
        if (modal == null) return;
        modal.classList.remove("active-edit");
      }
    </script>
    <!-- end Pop up Edit -->


    <!-- Pop up Foto -->
    <div class="modal-foto" id="modal-foto{{ $data->id }}">
      <div class="modal-header-foto">
        <h2 class="foto">Foto</h2>
        <!-- <button data-close-add class="close-btn-add">&times;</button> -->

        <div class="modal-body-foto">
          <form action="{{ route('progres') }}" method="post" enctype="multipart/form-data">

            <div class="align-middle text-center">

              <img src='images/{{ $data->foto }}' width='150' height='150' />

            </div>

            <div class="align-middle text-center">

              <button class="btn btn-danger btn-sm ms-auto" data-close-fot>Close</button>
            </div>


          </form>
        </div>
      </div>
    </div>
    <style>
      .modal-foto {
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

      .modal-body-foto {
        padding: 10px;
        bottom: 10px;
      }

      .modal-header-foto {
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

      p.foto {
        line-height: 1.6;
        margin-bottom: 20px;
      }

      h2.foto {
        text-align: center;

      }

      .modal-header-foto button.close-btn-foto {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 32px;
        background: none;
        outline: none;
        border: none;
        cursor: pointer;
      }

      .modal-header-foto button.close-btn-foto:hover {
        color: #6b46c1;
      }

      .active-foto {
        opacity: 1;
        pointer-events: auto;
      }
    </style>
    <script>
      const openModalFot = document.querySelectorAll("[data-modal-target]");
      const closeModalFot = document.querySelectorAll(
        "[data-close-fot]"
      );

      openModalFot.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = document.querySelector(button.dataset.modalTarget);
          openModal(modal);
        });
      });

      closeModalFot.forEach((button) => {
        button.addEventListener("click", () => {
          const modal = button.closest(".modal-foto");
          closeModal(modal);
        });
      });

      function openModal(modal) {
        if (modal == null) return;
        modal.classList.add("active-foto");
      }

      function closeModal(modal) {
        if (modal == null) return;
        modal.classList.remove("active-foto");
      }
    </script>
    <!-- end Pop up Foto -->

    <!-- Pop up Keterangan -->
    <div class="modal-keterangan" id="modal-keterangan{{ $data->id }}">
      <div class="modal-header-keterangan">
        <h2 class="keterangan">Keterangan</h2>
        <!-- <button data-close-add class="close-btn-add">&times;</button> -->

        <div class="modal-body-keterangan">
          <form action="{{ route('progres') }}" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="Enter Address" maxlength="500" rows="5">{{ $data->keterangan }}</textarea>
            </div>


            <div class="align-middle text-center">

              <button class="btn btn-danger btn-sm ms-auto" data-close-keterangan>Close</button>
            </div>


          </form>
        </div>
      </div>
    </div>
  <style>
    .modal-keterangan {
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

    .modal-body-keterangan {
      padding: 10px;
      bottom: 10px;
    }

    .modal-header-keterangan {
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

    p.keterangan {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    h2.keterangan {
      text-align: center;

    }

    .modal-header-keterangan button.close-btn-keterangan {
      position: absolute;
      right: 10px;
      top: 10px;
      font-size: 32px;
      background: none;
      outline: none;
      border: none;
      cursor: pointer;
    }

    .modal-header-keterangan button.close-btn-keterangan:hover {
      color: #6b46c1;
    }

    .active-keterangan {
      opacity: 1;
      pointer-events: auto;
    }
  </style>
  <script>
    const openModalKet = document.querySelectorAll("[data-modal-target]");
    const closeModalKet = document.querySelectorAll(
      "[data-close-keterangan]"
    );

    openModalKet.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
      });
    });

    closeModalKet.forEach((button) => {
      button.addEventListener("click", () => {
        const modal = button.closest(".modal-keterangan");
        closeModal(modal);
      });
    });

    function openModal(modal) {
      if (modal == null) return;
      modal.classList.add("active-keterangan");
    }

    function closeModal(modal) {
      if (modal == null) return;
      modal.classList.remove("active-keterangan");
    }
  </script>
  <!-- end Pop up keterangan -->


  </tbody>
  @endforeach
  </table>

</div>
</section><!-- End Contact Section -->


<!-- Pop up Add -->
<div class="modal-add" id="modal-add">
  <div class="modal-header-add">
    <h2 class="add">Add Form</h2>
    <!-- <button data-close-add class="close-btn-add">&times;</button> -->

    <div class="modal-body-add">
      <form action="{{ route('progres') }}" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="exampleFormControlSelect1">Id User</label>


          <select class="form-control" name="id_user" required>
            <option value='#'> Pilih Id user</option>
            <select>{{$progres->id_user}}</select>

        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Id Pemesanan</label>


          <select class="form-control" name="id_pemesanan" required>
            <option value='#'> Pilih Id</option>
            <select>{{$progres->id_pemesanan_rumah}}</select>

        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Kategori</label>


          <select class="form-control" name="status" required>
            <option value="#">Pilih Status</option>
            <option value="Selesai">Selesai</option>
            <option value="Pengerjaan">Pengerjaan</option>

          </select>

        </div>



        <div class="form-group">
          <label for="exampleFormControlTextarea1">Keterangan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="Enter Keterangan" maxlength="500" rows="2"></textarea>
        </div>


        <div class="form-group">
          <label class="custom-file-label" for="customFileLang">Upload Proggres</label>
          <input type="file" class="form-control" id="foto" name="foto_proggres" id="foto" required>

        </div>


        <div class="align-middle text-center">
          <button class="btn btn-success btn-sm ms-auto" name="add-proggres">Add</button>
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

@endsection
