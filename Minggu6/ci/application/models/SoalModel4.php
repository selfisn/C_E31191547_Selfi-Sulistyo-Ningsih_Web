<?php
	class Soalmodel4 extends CI_Model{

		public function tampil_txt()
		{
			$data = array('var1'=>'ini data satu', 'var2'=>'ini data dua');
			return $data;
		}
	}
?>