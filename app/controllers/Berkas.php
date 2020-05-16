<?php

class Berkas extends Controller {
    public function __construct(){
        $data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';
        $data['data_lom'] = $this->model('DataHandle')->getAll($table = 'tbl_lom');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/index', $data);
        $this->view('templates/footer');
	}

    public function index() {
		
    }
}