<?php

class User extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
			
	}

    public function index() {
		if($_SESSION["role_user"] !== 'Admin Project') {
			header('Location: ' . BASEURL . '/login/index');
		}

        $data['judul'] = 'User';
		$data['sub_judul'] = 'Daftar User';
		$data['data_user'] = $this->model('DataHandle')->getAll($table = 'tbl_user');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'User';
		$data['sub_judul'] = 'Tambah User';
		$data['data_mitra'] = $this->model('DataHandle')->getAll($table = 'tbl_mitra');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/v_tambah_user',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataUser($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_user', $id_table = 'id_user') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data User';
		$data['sub_judul'] = 'Ubah Data User';
		$data['data_user'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);

		$data['data_mitra'] = $this->model('DataHandle')->getAll($table = 'tbl_mitra');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/v_ubah_user', $data);
		$this->view('templates/footer');
	}
	
	public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataUser ($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/user/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/user/index');
		 	exit;
		}
	}   

	public function ubahProfile($id) {
		$data['judul'] = 'Profile';
		$data['sub_judul'] = 'Ubah Data Profile';
		$data['data_user'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/v_ubah_profile', $data);
		$this->view('templates/footer');
	}
	
	public function ubahDataProfile() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataUser ($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/user/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/user/index');
		 	exit;
		}
	}
}