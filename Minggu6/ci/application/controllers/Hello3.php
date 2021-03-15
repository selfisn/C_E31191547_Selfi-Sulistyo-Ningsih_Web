<?php
	class Hello3 extends CI_Controller{
		public function index() {
			//c3 - memuat model 'Hello_model'
			$this->load->model('Hello_model3');

			//pengambilan objek dari kelas Hello_model dan diuat di var $model
			$model = $this->Hello_model3;

			//mengambil data dari model
			$a = $model->txt;

			//membuat data yang akan dikirim ke view
			$data['teks'] = $a;

			//memanggil file view
			$this->load->view('helloview3', $data); //file view
		}
	}
?>