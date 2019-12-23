<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['mhs'] = $this->m_imk->ambil_data()->result();
		$this->load->view('home_view',$data);
	}

	public function add(){
		$this->load->view('add_view');
	}
	public function add_act(){

		$this->form_validation->set_rules('nim','NIM','trim|required|exact_length[9]|numeric');
		$this->form_validation->set_rules('nama','Nama','trim|required|regex_match[/^([a-z ])+$/i]');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('add_view');
		} 
		else{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');

			$data = array(
				'nim' => $nim,
				'nama' => $nama,
				'jenis_kelamin' => $jk,
				'alamat' => $alamat
			);
			$this->m_imk->add_data($data,'mahasiswa');
			redirect('home');
		}
	}

	public function update($nim){
		$where = array('nim' => $nim);
		$data['mhs'] = $this->m_imk->update_data($where, 'mahasiswa')->result();
		$this->load->view('update_view', $data);
	}
	public function update_act(){
		$this->form_validation->set_rules('nim','NIM','trim|required|exact_length[9]|numeric');
		$this->form_validation->set_rules('nama','Nama','trim|required|regex_match[/^([a-z ])+$/i]');

		if($this->form_validation->run()==FALSE) {
			$data = array(
			'errors'=>validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');

			$data = array(
				'nim' => $nim,
				'nama' => $nama,
				'jenis_kelamin' => $jk,
				'alamat' => $alamat
			);
			$where = array(
				'nim' => $nim
			);

			$this->m_imk->update_data_act($where,$data,'mahasiswa');
			redirect('home');
		}
	}

	public function delete($nim){
		$where = array('nim'=>$nim);
		$this->m_imk->delete_data($where,'mahasiswa');
		redirect('home');

	}

}
?>