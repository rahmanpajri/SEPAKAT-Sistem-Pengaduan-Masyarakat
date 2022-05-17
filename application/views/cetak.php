<div class="hide"><?php $this->load->view('navbar');?></div>
<script type="text/javascript">
  window.print();
</script>
<div class="container"><br>
  <h2>LAPORAN</h2>
  <div class="hide">
  <a href="cetak"><button class="btn btn-primary"><i class="fa fa-print"></i> CETAK LAPORAN</button></a>
  </div>
  <table class="table table-bordered table-sm table-hover">
    <thead>
    	<?php $no = 1; ?>
      <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>TGL PENGADUAN</th>
        <th>PENGADUAN</th>
        <th>TGL TANGGAPAN</th>
        <th>TANGGAPAN</th>
        <th>NAMA PETUGAS</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		foreach($laporan as $a){
    	?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $a->nik;?></td>
        <td><?php echo $a->nama;?></td>
        <td><?php echo $a->tgl_pengaduan;?></td>
        <td><?php echo $a->isi_laporan;?></td>
        <td><?php echo $a->tgl_tanggapan;?></td>
        <td><?php echo $a->tanggapan;?></td>
        <td><?php echo $a->nama_petugas;?></td>
        <td><?php echo $a->status;?></td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>