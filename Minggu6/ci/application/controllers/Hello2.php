<?php
	class Hello2 extends CI_Controller{
		public function index() {
			//echo "<h2>Hello World CI!</h2>";

			//memanggill file view
			$this -> load -> view('helloview2'); //fileview

		}
	}
?>