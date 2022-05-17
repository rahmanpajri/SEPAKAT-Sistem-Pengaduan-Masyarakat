<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('status')==1){
		$this->load->view('home');
		}else{
			redirect('');
		}
	}

	public function data_aduan($id)
	{
		if($this->session->userdata('nik')==$id){
		$data['masyarakat'] = $this->db->query("SELECT * FROM pengaduan WHERE nik='$id'")->result();
		$this->load->view('data_aduan',$data);
		}else if($this->session->userdata('id_petugas')==$id){
			$data['masyarakat'] = $this->db->query("SELECT * FROM pengaduan")->result();
			$this->load->view('data_aduan',$data);
		}else{
			$data['masyarakat'] = $this->db->query("SELECT * FROM pengaduan WHERE nik='$id'")->result();
			$this->load->view('data_aduan',$data);
		}
	}

	public function data_tanggapan($id)
	{
		if($this->session->userdata('nik')==$id){
		$data['masyarakat'] = $this->db->query("SELECT a.*, b.* FROM pengaduan as a, tanggapan as b WHERE a.nik='$id' AND a.id_pengaduan=b.id_pengaduan")->result();
		$this->load->view('data_tanggapan',$data);
		}else if($this->session->userdata('id_petugas')==$id){
			$data['masyarakat'] = $this->db->query("SELECT a.*, b.* FROM pengaduan as a, tanggapan as b WHERE a.id_pengaduan=b.id_pengaduan")->result();
			$this->load->view('data_tanggapan',$data);
		}
	}

	public function proses_aduan(){
		
		$nik = $_POST['nik'];
		$keluhan = $_POST['keluhan'];
		$tgl = date('Y-m-d');
		$status = 0;
		$fotoo = $_POST['foto'];

			$config['upload_path']      = 'assets/upload';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = 1000000000;
            $config['file_name']        = $fotoo;
            $config['max_width']        = 1024000;
            $config['max_height']       = 768000;

            //pemanggilan librabry upload
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $this->upload->data("file_name");


        $this->db->query("INSERT INTO `pengaduan`(`tgl_pengaduan`,`nik`,`isi_laporan`,`foto`,`status`) VALUES('$tgl','$nik','$keluhan','$fotoo','$status')");

        redirect('data_aduan/'.$nik);
	}

	public function terima_pengaduan()
	{
			$terima=$_POST['terima'];
			$id_pengaduan=$_POST['id_p'];
			$a = $this->db->query("UPDATE `pengaduan` SET `status`='$terima' WHERE `id_pengaduan`='$id_pengaduan'");
			
			redirect('data_aduan/'.$this->session->userdata('id_petugas').$this->session->userdata('nik'),$a);
		
	}

	public function hapus_pengaduan(){
		$id_pengadu = $_POST['id_pengaduan'];

		$data['masyarakat'] = $this->db->query("DELETE FROM `pengaduan` WHERE id_pengaduan='$id_pengadu'");
		redirect('data_aduan/'.$this->session->userdata('nik'));
	}

	public function kirim_tanggapan()
	{

			$id_p=$_POST['id_p'];
			$tgl=$_POST['tgl'];
			$isi_tanggapan=$_POST['isi_tanggapan'];
			$id_petugas=$this->session->userdata('id_petugas');
			$kirim=$_POST['kirim'];

			$a = $this->db->query("INSERT INTO `tanggapan`(`id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES ('$id_p','$tgl','$isi_tanggapan','$id_petugas')");
			$a = $this->db->query("UPDATE `pengaduan` SET `status`='$kirim' WHERE `id_pengaduan`='$id_p'");

			redirect('data_aduan/'.$this->session->userdata('id_petugas').$this->session->userdata('nik'),$a);
		
	}

	public function data_masyarakat(){
		$data['masyarakat'] = $this->db->query("SELECT * FROM masyarakat")->result();
		$this->load->view('data_masyarakat',$data);
	}

	public function tambah_masyarakat()
	{
			$nama=$_POST['nama'];
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$telp = $_POST['telp'];
			$nik = $_POST['nik'];

			$data['masyarakat'] = $this->db->query("INSERT INTO masyarakat (`nik`,`nama`, `username`,`password`,`telp`) VALUES ('$nik','$nama','$user','$pass','$telp')");

			redirect('data_masyarakat');
		
	}

	public function edit_masyarakat(){
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telp = $_POST['telp'];
		$nik = $_POST['nik'];

		$data['masyarakat'] = $this->db->query("UPDATE `masyarakat` SET nama='$nama', username='$username', password='$password', telp='$telp' WHERE nik='$nik'");
		redirect('data_masyarakat');
	}

	public function hapus_masyarakat(){
		$nik = $_POST['nik'];

		$data['masyarakat'] = $this->db->query("DELETE FROM `masyarakat` WHERE nik='$nik'");
		redirect('data_masyarakat');
	}

	public function data_petugas(){
		$data['petugas'] = $this->db->query("SELECT * FROM petugas")->result();
		$this->load->view('data_petugas',$data);
	}

	public function tambah_petugas()
	{

			$nama=$_POST['nama'];
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$telp = $_POST['telp'];
			$level = $_POST['level'];

			$data['petugas'] = $this->db->query("INSERT INTO petugas (`nama_petugas`, `username`,`password`,`telp`,`level`) VALUES ('$nama','$user','$pass','$telp','$level')");
			redirect('data_petugas');
		
	}

	public function edit_petugas(){
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telp = $_POST['telp'];
		$id_petugas = $_POST['id_petugas'];

		$data['petugas'] = $this->db->query("UPDATE `petugas` SET nama_petugas='$nama', username='$username', password='$password', telp='$telp' WHERE id_petugas='$id_petugas'");
		redirect('data_petugas');
	}

	public function hapus_petugas(){
		$id_petugas = $_POST['id_petugas'];

		$data['petugas'] = $this->db->query("DELETE FROM `petugas` WHERE id_petugas='$id_petugas'");
		redirect('data_petugas');
	}

	public function laporan(){
		
		$data['laporan'] = $this->db->query("SELECT a.nik,a.nama, b.tgl_pengaduan, b.isi_laporan,b.status,c.nama_petugas,d.tgl_tanggapan,d.tanggapan FROM masyarakat as a, pengaduan as b, petugas as c, tanggapan as d WHERE a.nik=b.nik and b.id_pengaduan=d.id_pengaduan and c.id_petugas=d.id_petugas")->result();
		$this->load->view('laporan',$data);
	}

	public function cetak(){
		$data['laporan'] = $this->db->query("SELECT a.nik,a.nama, b.tgl_pengaduan, b.isi_laporan,b.status,c.nama_petugas,d.tgl_tanggapan,d.tanggapan FROM masyarakat as a, pengaduan as b, petugas as c, tanggapan as d WHERE a.nik=b.nik and b.id_pengaduan=d.id_pengaduan and c.id_petugas=d.id_petugas")->result();
		$this->load->view('cetak',$data);
	}
}
