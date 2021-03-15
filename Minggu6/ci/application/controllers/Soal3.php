<?php
	class Soal3 extends CI_Controller{
		public function index() {
			$this->load->model('Soalmodel3');

			$data = $this->Soalmodel3->tampil_txt();

			echo $data;
		}

	}
?>