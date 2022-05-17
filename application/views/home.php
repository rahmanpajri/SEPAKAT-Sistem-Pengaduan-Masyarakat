<?php $this->load->view('navbar');?>
<div class="container">
  		<!--<span class='numscroller' data-min='1' data-max='1000' data-delay='5' data-increment='10'>1000</span>-->
      <div class="container-fluid"><br>
      <h2 class="animation-fadeInQuickInv">SELAMAT DATANG, <?php if($this->session->userdata('login')==1){ echo $this->session->userdata('nama');}else{echo $this->session->userdata('name');}?></h2>
<div class="box">
  <h3>JUMLAH ADUAN</h3><br>
  <h1><i class="fa fa-file-text"></i> 
    <?php if($this->session->userdata('login')==1){
      $nik = $this->session->userdata('nik');
      echo $this->db->query("SELECT * FROM pengaduan WHERE nik='$nik'")->num_rows();
    }else{echo $this->session->userdata('jumlah');}?>
  </h1>
</div>
<div class="box3">
  <h3>ADUAN DIPROSES</h3><br>
  <h1><i class="fa fa-check"></i>
    <?php if($this->session->userdata('login')==1){
      $nik = $this->session->userdata('nik');
      echo $this->db->query("SELECT * FROM pengaduan WHERE nik='$nik' AND status='proses'")->num_rows();
    }else{ echo $this->session->userdata('proses');}?></h1>
</div><br>
<div class="box2">
  <h3>ADUAN SELESAI</h3><br>
  <h1><i class="fa fa-check"></i>
    <?php if($this->session->userdata('login')==1){
      $nik = $this->session->userdata('nik');
      echo $this->db->query("SELECT * FROM pengaduan WHERE nik='$nik' AND status='selesai'")->num_rows();
    }else{ echo $this->session->userdata('selesai');}?></h1>
</div> 
</div>
</div>
<?php $this->load->view('footer');?>
</body>
</html>
