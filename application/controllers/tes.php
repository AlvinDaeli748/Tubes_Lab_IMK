<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tes extends CI_Controller {
		public function _construct(){

			parent::_construct();
			$this->load->helper('url_helper');
		}

		public function index(){

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required|alpha|min_length[6]|max_length[12]',array('required'=>'Username wajib diisi'));
			$this->form_validation->set_rules('password','Password','required',array('required'=>'Password wajib diisi'));
			$this->form_validation->set_rules('passconf','Confirm Password','required',array('required'=>'Confirm Password wajib diisi'));
			$this->form_validation->set_rules('email','Email','required',array('required'=>'Email wajib diisi'));

			if($this->form_validation->run() == FALSE){
				$this->load->view('myform');
			} else {
				$this->load->view('form_success');
			}
		}
	}
?>