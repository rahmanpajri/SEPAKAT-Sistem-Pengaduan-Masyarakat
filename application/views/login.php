<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN <?php if($login==1){echo "MASYARAKAT";}else{echo "ADMIN/PETUGAS";}?></title>
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
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i><img src="<?php echo base_url() ?>assets/images/logo.png"></i> <br> <strong>Selamat Datang di SEPAKAT</strong>
            </h1>
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                  <?php if($login==1){?>
                    <div class="block-options pull-right">
                        <h2>Belum punya akun?</h2>
                        <a href="<?php echo base_url('registrasi'); ?>" class="btn btn-effect-ripple" data-toggle="tooltip" data-placement="left" title="Buat Akun Baru">Klik Disini <i class="fa fa-plus"></i></a>
                    </div>
                  <?php } ?>
                    <h2>Silahkan Login</h2>
                </div>
                <!-- Login Form -->
                <form id="form-login" action="aksilogin" method="POST" class="form-horizontal">
                  <?php echo $pesan;?>
                  <input type="hidden" name="login" value="<?php echo $login;?>">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username.." autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password.." required>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-check"></i> LOGIN</button>
                            <a href="<?php echo base_url('')?>"><button type="button" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i> BACK</button></a>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
          </div>
        </div>


</body>
</html>
