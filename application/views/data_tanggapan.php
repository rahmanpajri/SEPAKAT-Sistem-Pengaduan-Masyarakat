<?php $this->load->view('navbar');?>
<div class="container"><br>
	<h2>DATA TANGGAPAN</h2>
  <h6>Data yang sudah ditanggapi</h6>
  <table class="table table-bordered table-sm table-hover">
    <thead>
    	<?php $no = 1; ?>
      <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>KELUHAN</th>
        <th>FOTO</th>
        <th>TANGGAL</th>
        <th>TANGGAPAN</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		foreach($masyarakat as $a){
    	?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $a->nik;?></td>
        <td><?php echo $a->isi_laporan;?></td>
        <td><img src="<?php echo base_url('assets/upload/').$a->foto;?>" width="100px" height="100px"></td>
        <td><?php echo $a->tgl_pengaduan;?></td>
        <td><?php echo $a->tanggapan;?></td>
        <td><?php if($a->status=='0'){ ?>
          Belum Ditanggapi
        <?php }else if($a->status=='proses'){?>
          Masih Diproses
        <?php }else{?>
          Selesai Diproses
        <?php }?>
        </td>
      <?php } ?>
    </tbody>
  </table>
</div>

  <?php $this->load->view('footer');?>