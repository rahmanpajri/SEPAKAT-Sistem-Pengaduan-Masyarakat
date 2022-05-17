<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRASI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>">
  <link rel="icon" href="<?php echo base_url() ?>assets/images/logo.png">
  <link rel="stylesheet" href="<?php echo base_url('assets/main.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins.css')?>">
  <script src="<?php echo base_url('assets/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
</head>
<body>
  <div class="container">
    <div id="login-container">
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <h2>FORM PENDAFTARAN</h2>
                </div>
                <!-- Login Form -->
                <form id="form-login" action="aksiregistrasi" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK.." autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama.." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username.." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password.." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="telp" class="form-control" placeholder="Masukkan No. Telp..." required>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-plus"></i> REGISTRASI</button>
                            <a href="<?php echo base_url('')?>"><button type="button" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i> BACK</button></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <strong>Sudah punya akun? <a href="<?php echo base_url()?>"><span class="badge badge-primary">Klik Disini</span></a></strong>

                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
          </div>
        </div>

</body>
</html>
