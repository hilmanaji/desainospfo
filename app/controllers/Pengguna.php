<?php

class Pengguna extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
			
	}

    public function index() {
		if($_SESSION["role_user"] !== 'Admin') {
			header('Location: ' . BASEURL . '/login/index');
		}

        $data['judul'] = 'Pengguna';
		$data['sub_judul'] = 'Daftar Pengguna';
		$data['data_pengguna'] = $this->model('DataHandle')->getAll($table = 'tbl_pengguna');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'User';
		$data['sub_judul'] = 'Tambah Pengguna';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_tambah_pengguna',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataPengguna($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_pengguna', $id_table = 'nik') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data Pengguna';
		$data['sub_judul'] = 'Ubah Data Pengguna';
		$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_pengguna',$id_table = 'nik', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_ubah_user', $data);
		$this->view('templates/footer');
	}
	
	public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataPengguna($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		}
	}   

	public function ubahProfile($id) {
		$data['judul'] = 'Profile';
		$data['sub_judul'] = 'Ubah Data Profile';
		$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_pengguna',$id_table = 'nik', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_ubah_profile', $data);
		$this->view('templates/footer');
	}
	
	public function ubahDataProfile() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataPengguna ($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		}
	}
}