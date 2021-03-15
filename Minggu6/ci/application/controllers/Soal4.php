<?php
	class Soal4 extends CI_Controller{
		public function index() {

			$this->load->model('Soalmodel4');

			$data = $this->Soalmodel4->tampil_txt();

			$this->load->view('soalview4', $data);
		}
	}
?>
