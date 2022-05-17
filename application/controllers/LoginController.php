<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
			redirect('home');
		}else{
			$this->load->view('index');
		}
	}
	public function login()
	{	
		$data['pesan'] = '';
		$data['login'] = $_POST['login'];
		$this->load->view('login',$data);
	}

	public function aksilogin()
	{
		$login 	= $_POST['login'];
		$user 	= $_POST['username'];
		$pass 	= $_POST['password'];

		if($login==1){
			$query = $this->db->query("SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'");
		}else{
			$query = $this->db->query("SELECT * FROM petugas WHERE username='$user' AND password='$pass'");
		}
		if($query->num_rows()>0){
			$nik = $this->session->userdata('nik');
			$session = array(
						'status' =>1,
						'login' =>$login,
						'name' =>$query->row()->nama_petugas,
						'nama' =>$query->row()->nama,
						'nik' =>$query->row()->nik,
						'id_petugas' =>$query->row()->id_petugas,
						'level' => $query->row()->level,
						'jumlah' => $this->db->query("SELECT * FROM pengaduan")->num_rows(),
						'proses' => $this->db->query("SELECT * FROM pengaduan WHERE status='proses'")->num_rows(),
						'selesai' => $this->db->query("SELECT * FROM pengaduan WHERE status='selesai'")->num_rows(),
			);
			$this->session->set_userdata($session);
				redirect('home');
		}else{
			$data['pesan'] = '<div class="alert alert-warning">
							    <strong>Peringatan!</strong> Password/Username Salah
							  </div>';
			$data['login'] = $_POST['login'];
			$this->load->view('login',$data);
		}
	}

	public function registrasi(){
		$this->load->view('registrasi');
	}

	public function aksiregistrasi(){
			$nama=$_POST['nama'];
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$telp = $_POST['telp'];
			$nik = $_POST['nik'];

			$data['masyarakat'] = $this->db->query("INSERT INTO masyarakat (`nik`,`nama`, `username`,`password`,`telp`) VALUES ('$nik','$nama','$user','$pass','$telp')");

			$data['login'] = '1';
			redirect('');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
