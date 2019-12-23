<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login_view');
	}

	public function login_act(){
		$uname = $this->input->post('uname');
		$pass  = $this->input->post('pass');
		 
		if($uname == 'Admin' && $pass == '12345678'){
			$log = array(
						'uname' => $uname,
						'pass'	=> $pass
					);
			$this->session->set_userdata('user', $log);
			redirect('home');
		} else {
			echo "<script> alert('Username atau Password anda salah!'); </script>";
			echo "<script> location='../'</script>";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>