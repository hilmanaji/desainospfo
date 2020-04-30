<?php 

class Beranda extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
		
	}
	
	public function index () {
		$data['judul'] = 'Beranda';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar',$data);
		$this->view('beranda/index', $data);
		$this->view('templates/footer');
	}
}