<?php

class Project extends Controller {
    public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}	
	}

    public function index() {
        $data['judul'] = 'Project';
        $data['sub_judul'] = 'Data Project FTTx';
        $data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_project');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('project/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Tambah Project';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('project/v_tambah_project',$data);
		$this->view('templates/footer');
	}

    public function simpan() {
		if( $this->model('DataHandle')->tambahDataProject($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_project', $id_table = 'id_project') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssTambah');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Ubah Data Project';
		$data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_project',$id_table = 'id_project', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('project/v_ubah_project', $data);
		$this->view('templates/footer');
	}
	
	public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataProject($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/project/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/project/index');
		 	exit;
		}
	}   
}