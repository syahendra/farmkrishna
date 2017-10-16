<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message1');
	}
	function ceklogin(){
		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->rafimodel->proseslogin($user, $pass);
			$hasil = count($cek);
			if($hasil > 0){
				$yglogin = $this->db->get_where('users',array('username'=>$user, 'password' => $pass))->row();
				$data = array('udhmasuk' => true,
						'nama' => $yglogin->nama, 'email' => $yglogin->email, 'username' => $yglogin->username, 'level' => $yglogin->level);
				$this->session->set_userdata($data);
				if($yglogin->level == 'admin'){
					redirect('beranda');
				}elseif($yglogin->level == 'moderator'){
					redirect('moderator');
				}elseif($yglogin->level =='gudang'){
				redirect('gudang');
				}
			}else{
				redirect('index');
			}
		}
	}
	function beranda(){
		$data["title"] = "Halaman Beranda";
		$this->load->view('beranda', $data);
	}
	function moderator(){
		$data["title"] = "Halaman Moderator";
		$this->load->view('moderator', $data);
	}
	function gudang(){
		$data["title"] = "Halaman gudang";
		$this->load->view('gudang', $data);
	}
	function datatelur(){
		$data["title"] = "Halaman Beranda";
		$this->load->view('datatelur', $data);
	}
	
	function keluar(){
		$this->session->sess_destroy();
		redirect('index');
	}
}
