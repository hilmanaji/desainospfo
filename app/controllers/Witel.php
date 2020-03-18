<?php

class Witel extends Controller {
	public function __construct(){
		Flasher::startSession();	
	}
	
    public function index (){
		$data['judul'] = 'Witel';
		$data['sub_judul'] = 'Daftar Witel';
		$data['data_witel'] = $this->model('DataHandle')->getAll($table = 'tbl_witel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('witel/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Witel';
		$data['sub_judul'] = 'Tambah Witel';
		$data['data_regional'] = $this->model('DataHandle')->getAll($table = 'tbl_regional');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('witel/v_tambah_witel',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDatawitel($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_witel', $id_table = 'id_witel') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		}
	}
 
	public function getUbah($id, $id_reg){
		$data['judul'] = 'Witel';
		$data['sub_judul'] = 'Ubah Data Witel';
		$data['data_witel'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_witel',$id_table = 'id_witel', $id);
		$data['data_regional'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_regional',$id_table = 'id_regional', $id_reg);
		$data['data_reg'] = $this->model('DataHandle')->getAll($table = 'tbl_regional');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('witel/v_ubah_witel', $data);
		$this->view('templates/footer');
	}

	public function ubahData() {
		if( $this->model('DataHandle')->ubahDatawitel ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/witel/index');
			exit;
		}
	}

}