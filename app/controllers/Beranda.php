<?php 

class Beranda extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
		
	}
	
	public function index () {
		$this->view('beranda/index');
	}
}