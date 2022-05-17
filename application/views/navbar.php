<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Sistem Pengaduan Masyarakat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php echo base_url() ?>assets/images/logo.png">
  <link rel="stylesheet" href="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins.css')?>">
  <script src="<?php echo base_url('assets/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/ajax.googleapis.com/ajax/libs/jquery/3.3.1/numscroller-1.0.js')?>"></script>
  <script src="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')?>"></script>
  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img{
      width: 100%;
      height: 23%;
      padding: 0;
      margin: 0;
  }
  .bg-navbar{
    background-color: #112d4e;
  }
  .icon{
    width: 115px;
    height: 47px;
    margin-right: 45px;
  }
  .footer {
    margin-top: 50px;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #112d4e;
    color: white;
    margin-top: 400px;
    padding-top: 10px;
    padding-bottom: 5px;
    text-align: center;
  }
  .box{
    width: 400px;
    height: 150px;
    background-color : #afde5c;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
  }
  .box:hover{
    margin-left: 20px;
    width: 400px;
    height: 150px;
    background-color : #afde5c;
    margin-bottom: 20px;
    border-radius: 10px;
    opacity: 0.9;
  }
  .box2{
    width: 400px;
    height: 150px;
    background-color : #e96443;
    padding: 15px;
    border-radius: 10px;
  }
  .box2:hover{
    margin-left: 20px;
    width: 400px;
    height: 150px;
    background-color : #e96443;
    padding: 15px;
    border-radius: 10px;
    opacity: 0.9;
  }
  .box3{
    width: 400px;
    height: 150px;
    background-color : #5ccdde;
    padding: 15px;
    border-radius: 10px;
  }
  .box3:hover{
    margin-left: 20px;
    width: 400px;
    height: 150px;
    background-color : #5ccdde;
    padding: 15px;
    border-radius: 10px;
    opacity: 0.9;
  }
  table{
    margin-top: 10px;
  }
  body{
    scroll-behavior: smooth;
  }
  @media print{
    .hide {
      display:none;
    }
  }
  </style>
</head>
<body style="height:1100px; background-color: #f5f5f5;">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/images/header200.jpg')?>" >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/images/header3rev.jpg')?>">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/images/header4.jpg')?>">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<nav class="navbar navbar-expand-sm bg-navbar navbar-dark sticky-top">
  <a class="navbar-brand animation-fadeInQuickInv" href="home"><img src="<?php echo base_url('assets/images/logo.png')?>" class="icon"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('home')?>">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('data_aduan/').$this->session->userdata('nik').$this->session->userdata('id_petugas');?>">DATA PENGADUAN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('data_tanggapan/').$this->session->userdata('nik').$this->session->userdata('id_petugas');?>">HASIL TANGGAPAN</a>
    </li>
    <?php if($this->session->userdata('login')==2){?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('data_masyarakat')?>">DATA MASYARAKAT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('data_petugas')?>">DATA PETUGAS</a>
    </li>
    <?php }if($this->session->userdata('login')==2 AND $this->session->userdata('level')=='admin'){?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('laporan')?>">LAPORAN</a>
    </li>
    <?php } ?>
  </ul>
  <ul class="navbar-nav ml-auto nav-flex-icons">
      
      <li class="nav-item">

      <a class="nav-link" href="<?php echo base_url('logout')?>" data-toggle="tooltip" data-placement="left" title="LOGOUT"><i class="fa fa-sign-out"></i></a>
    </li>
    </ul>
</nav>
