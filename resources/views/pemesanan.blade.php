<!DOCTYPE html>
<html lang="en">
<title>Pemesanan - Bernady Land Slawu</title>

<link href="img/logo-bernady.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemesanan - Bernady</title>

    <link href="img/logo-bernady.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <script>
        $(document).ready(function () {
            $('.form-checkbox').click(function () {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>

</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab"> Pesan Rumah </label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div id="login-box" class="col-md-12">
                    <form class="user" action="{{ route('prosespemesanan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" >
                            <input name="id_user" type="text" class="form-control" placeholder="Id User *"
                                value="{{auth()->user()->id}}" /></input>
                        </div>
                        <div class="form-group">
                            <input name="nama_pemesan" type="text" class="form-control" placeholder="Nama Lengkap *"
                                value="{{auth()->user()->name}}" /></input>
                        </div>
                        <div class="form-group">
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat *" value="" /></input>
                        </div>
                        <div class="form-group">
                            <input name="no_telp" type="number" class="form-control" placeholder="Nomor Telepon *"
                                value="" /></input>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="nama_cluster">
                            <option>-- Pilih Cluster --</option>
                                <option>Boulevard Magnolia</option>
                                <option>Camelia</option>
                                <option>Edge Gardenia</option>
                                <option>New Edge Gardenia</option>
                                <option>Pinewood Magna</option>
                                <option>Pinewood Prime</option>
                                <option>Pinewood  Varsa</option>
                                <option>Pinewood Millenial</option>
                                <option>Pinewood Terra</option>
                                <option>Pinewood Terra +</option>
                                <option>Plumeria</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <!-- <input name="NPerumahan" type="number" class="form-control"  placeholder="Nomor Perumahan *" value="" /> -->
                                <select class="form-control" name="jenis_pembayaran">
                                    <option>-- Metode Pembayaran --</option>
                                    <option>InHouse</option>
                                    <option>KPR</option>
                                </select>
                            </div>
                            <div class="col-4 form-group">
                                <input name="tgl_pemesanan" type="date" class="form-control"
                                    placeholder="Tgl pemesanan *" value="" /></input>
                            </div>
                        </div>
                        <div class="form-group">
                                <select class="form-control" name="jumlah_cicilan_dp" >
                                    <option>-- PIlih Jumlah Cicilan DP --</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <select class="form-control" name="jumlah_cicilan_inhouse">
                                    <option>-- PIlih Jumlah Cicilan InHouse --</option>
                                    <option>Pilih Ini Jika Metode Pembayaran KPR</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                        </div>
                        <div class="row">
                        <div class="col-2 form-group">
                            <!-- <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" /> -->
                            <label for="fc_ktp">Upload KTP</label>
                        </div>
                        <div class="col-10 form-group">
                            <input type="file" name="fc_ktp" class="form-control"></input>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Pesan</button>
                        <a role="button" href="/portofolio" class="btn btn-danger btn-user btn-block">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</body>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#show_password').on('click', function () {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');
            if (passwordField.val() != '') {
                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).text('Hide Password');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).text('Show Password');
                }
            } else {
                alert("Please Enter Password");
            }
        });
    });
</script>
</body>

</html
