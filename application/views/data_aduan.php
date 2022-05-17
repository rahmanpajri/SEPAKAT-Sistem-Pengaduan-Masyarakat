<?php $this->load->view('navbar');?>
<div class="container"><br>
	<h2>DATA KELUHAN</h2>
  <?php if($this->session->userdata('login')==1){?>
	<button class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>TAMBAH KELUHAN</button>
  <?php }?>
  <table class="table table-bordered table-sm table-hover">
    <thead>
    	<?php $no = 1; ?>
      <tr>
        <th>NO</th>
        <th>KELUHAN</th>
        <th>FOTO</th>
        <th>TANGGAL</th>
        <th>STATUS</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		foreach($masyarakat as $a){
    	?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $a->isi_laporan;?></td>
        <td><img src="<?php echo base_url('assets/upload/').$a->foto;?>" width="100px" height="100px"></td>
        <td><?php echo $a->tgl_pengaduan;?></td>
        <td><?php if($a->status=='0'){ ?>
          Belum Ditanggapi
        <?php }else if($a->status=='proses'){?>
          Masih Diproses
        
        <?php }else{?>
          Selesai Diproses
        <?php }?>
        </td>
        <?php if($this->session->userdata('login')==2){?>
          <td>
            <?php if($a->status=='0'){?>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $a->id_pengaduan;?>terima"><i class="fa fa-save"></i> TERIMA</button>
    
          <?php }else if($a->status=='proses'){?>
            <button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $a->id_pengaduan;?>proses"><i class="fa fa-circle-o-notch"></i> PROSES</button>
          <?php }else if($a->status=='selesai'){?>
            <button class="btn btn-success" data-toggle="modal" disabled><i class="fa fa-check"></i> SELESAI</button>
          <?php }}?>
        </td>
        <?php if($this->session->userdata('login')==1){?>
        <td>
          <button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $a->id_pengaduan?>"><i class="fa fa-trash"></i> Hapus</button>
          <?php } ?>
          </td>
      </tr>
  		<?php }?>
    </tbody>
  </table>
</div>

  <?php $this->load->view('footer');?>
  
      <div id="tambah" class="modal fade" role="dialog">
        <form action="<?php echo base_url('proses_aduan') ?>" method="POST" class="form-horizontal form-bordered">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">TAMBAH ADUAN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <h2>FORM PENGADUAN</h2>
            </div><br>
            <input type="hidden" name="nik" value="<?php echo $this->session->userdata('nik')?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto</label>
                               <input type="file" name="foto" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Keluhan</label>
                                <textarea name="keluhan" class="form-control" rows="10" required></textarea>
                        </div>
         
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="terima" value="proses" >TAMBAH</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
		            </div>
		        </div>
		    </div>
          </form>
      </div>

      <?php 
        foreach ($masyarakat as $a) {
      ?>
      <div id="myModal<?php echo $a->id_pengaduan;?>terima" class="modal fade" role="dialog">
        <form action="<?php echo base_url('terima_pengaduan');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <input type="hidden" name="id_p" value="<?php echo $a->id_pengaduan;?>">
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">PENGADUAN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <h2>TERIMA PENGADUAN</h2>
            </div><br><br>

            
            <div class="">
              <h5>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $a->nik;?><h5>
            </div>
            <div class="">
              <h5>TANGGAL :  <?php echo $a->tgl_pengaduan;?></h5>
            </div>

          <div class="form-group">
            <h5><label for="disabledInput">ISI :</label></h5>
            <textarea class="form-control" rows="5" id="comment" name="isi" disabled=""><?php echo $a->isi_laporan;?></textarea>
          </div>

              <div class="form-group">
            <h5><label for="foto">FOTO :</label></h5>
            <img src="<?php echo base_url('assets/upload/').$a->foto;?>" width="45%" height="45%">
          </div>
         
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="terima" value="proses" >TERIMA</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
            </div>
          </form>
          </div>

        </div>
      </div>
      </div>





<?php
      }
      ?>



     <?php 
        foreach ($masyarakat as $a) {
      ?>
      <div id="myModal<?php echo $a->id_pengaduan;?>proses" class="modal fade" role="dialog">
        <form action="<?php echo base_url('kirim_tanggapan');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <input type="hidden" name="id_p" value="<?php echo $a->id_pengaduan;?>">
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">FORM TANGGAPAN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <h2>PENGADUAN MASYARAKAT</h2>
            </div><br><br>

          <input type="hidden" name="id_p" value="<?php echo $a->id_pengaduan;?>">
          <input type="hidden" class="form-control" name="tgl" value="<?php echo date("Y-m-d");?>">
    

          
            <div class="">
              <h5>NIK:</h5>
              <h5><?php echo $a->nik;?></h5><br>
            </div>
            <div class="">
              <h5>TANGGAL:</h5>
              <h5><?php echo $a->tgl_pengaduan;?></h5>
            </div><br>

          <div class="form-group">
            <h5><label for="disabledInput">TANGGAPAN :</label></h5>
            <textarea class="form-control" rows="5" id="comment" name="isi_tanggapan" ></textarea>
          </div>

              
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name=kirim value="selesai" >KIRIM</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
            </div>
          </form>
          </div>

        </div>
      </div>
      </div>





<?php
      }
      ?>

      <?php 
        foreach ($masyarakat as $a) {
      ?>
      <div id="hapus<?php echo $a->id_pengaduan?>" class="modal fade" role="dialog">
        <form action="<?php echo base_url('hapus_pengaduan');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <input type="hidden" name="id_pengaduan" value="<?php echo $a->id_pengaduan;?>">
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">FORM</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <p>Apakah yakin ingin menghapus data?</p>

            </div>
          </div>
          <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="terima" value="proses" >Yakin</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
          </form>
          </div>

        </div>
      </div>
      </div>
<?php
      }
      ?>
       