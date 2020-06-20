<?php 

class Beranda extends Controller {
	public function __construct(){
				
	}
	
	public function index () {
		$this->view('beranda/index');
	}
}