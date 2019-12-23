<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_imk extends CI_Model {

		public function ambil_data(){
			$data = $this->db->get("mahasiswa");
			return $data;
		}

		public function add_data($data,$table){
			$this->db->insert($table,$data);
		}

		public function update_data($where, $table){
			return $this->db->get_where($table, $where);
		}
		public function update_data_act($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function delete_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}


	}
?>