<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pengaduan Masyarakat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>">
  <link rel="icon" href="<?php echo base_url() ?>assets/images/logo.png">
  <link rel="stylesheet" href="<?php echo base_url('assets/main.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins.css')?>">
  <script src="<?php echo base_url('assets/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/ajax.googleapis.com/ajax/libs/jquery/3.3.1/numscroller-1.0.js')?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
  <style type="text/css">
    body{
      padding-top: 200px;
    }
  </style>
</head>
<body>

<div class="container" align="center">
  <h2 class="h2 text-light text-center push-top-bottom animation-slideDown">
      <i><img src="<?php echo base_url() ?>assets/images/logo.png"></i> <br> <strong>Selamat Datang di Sistem Informasi Keluhan Masyarakat</strong>
  </h2>
  <h5 class="h5 text-light text-center push-top-bottom animation-slideDown"><strong>Pusat Pengaduan Masyarakat Indonesia sebagai bentuk penyampaian Aspirasi terhadap kinerja Pemerintah</strong>
  </h5>
	<form action="login" method="POST" class="animation-fadeInQuickInv">
  		<button type="submit" name="login" class="btn btn-primary" value="1">Login Sebagai Masyarakat</button>&nbsp;&nbsp;&nbsp;
  		<button type="submit" name="login" class="btn btn-success" value="2">Login Sebagai Admin/Petugas</button>
  	</form><br><br><br>
  <h5 class="text-light">Jumlah Masyarakat yang sudah melakukan pengaduan</h5> 
  <h1 class="h1 text-light animation-slideDown">
    <span class='numscroller' data-min='1' data-max='<?php echo $this->db->query("SELECT * FROM PENGADUAN")->num_rows();?>' data-delay='1' data-increment='1'><?php echo $this->db->query("SELECT * FROM PENGADUAN")->num_rows();?>
    </span>
  </h1>   
</div>

</body>
</html>
