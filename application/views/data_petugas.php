<?php $this->load->view('navbar');?>
<div class="container"><br>
  <h2>DATA PETUGAS</h2>
  <button class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> TAMBAH PETUGAS</button>          
  <table class="table table-bordered table-sm table-hover">
    <thead>
    	<?php $no = 1; ?>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>USERNAME</th>
        <th>TELP</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		foreach($petugas as $a){
    	?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $a->nama_petugas;?></td>
        <td><?php echo $a->username;?></td>
        <td><?php echo $a->telp;?></td>
        <td>
          <button class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $a->id_petugas?>"><i class="fa fa-pencil"></i> Edit</button>
          <button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $a->id_petugas?>"><i class="fa fa-trash"></i> Hapus</button>
        </td>
      </tr>
  <?php } ?>
      </tbody>
  </table>
</div>
  <?php $this->load->view('footer');?>

             
     <?php 
        foreach ($petugas as $a) {
      ?>
      <div id="edit<?php echo $a->id_petugas?>" class="modal fade" role="dialog">
        <form action="<?php echo base_url('edit_petugas');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <input type="hidden" name="id_petugas" value="<?php echo $a->id_petugas;?>">
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">PENGEDITAN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <h2>EDIT DATA</h2>
            </div><br><br>

            
            <div class="">
              <h5>NAMA</h5>
              <input type="text" name="nama" value="<?php echo $a->nama_petugas;?>" class="form-control">
            </div>
            <div class="">
              <h5>USERNAME</h5>
              <input type="text" name="username" value="<?php echo $a->username;?>" class="form-control">
            </div>
            <div class="">
              <h5>PASSWORD</h5>
              <input type="password" name="password" value="<?php echo $a->password;?>" class="form-control">
            </div>
            <div class="">
              <h5>TELP</h5>
              <input type="text" name="telp" value="<?php echo $a->telp;?>" class="form-control">
            </div>
         
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="terima" value="proses" >Edit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        foreach ($petugas as $a) {
      ?>
      <div id="hapus<?php echo $a->id_petugas?>" class="modal fade" role="dialog">
        <form action="<?php echo base_url('hapus_petugas');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <input type="hidden" name="id_petugas" value="<?php echo $a->id_petugas;?>">
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

      <?php 
        foreach ($petugas as $a) {
      ?>
      <div id="tambah" class="modal fade" role="dialog">
        <form action="<?php echo base_url('tambah_petugas');?>" method="POST">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" align="center">
              <h4 class="modal-title">TAMBAH PETUGAS</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div align="center">
              <h2>PENAMBAHAN</h2>
            </div><br><br>

            
            <div class="">
              <h5>NAMA</h5>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="">
              <h5>USERNAME</h5>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="">
              <h5>PASSWORD</h5>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="">
              <h5>TELP</h5>
              <input type="text" name="telp" class="form-control">
            </div>
            <div>
                <h5>LEVEL</h5>
              <select name="level" class="custom-select">
                <option value="admin">ADMIN</option>
                <option value="petugas">PETUGAS</option>
              </select>
            </div>
         
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="terima" value="proses" >TAMBAH</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
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