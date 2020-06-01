<?php

class ListOfMaterial extends Controller {
    public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}	
	}

    public function index() {
        $data['judul'] = 'List Material';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';
        $data['data_lom'] = $this->model('DataHandle')->getAll($table = 'tbl_lom');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('list_material/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'List Material';
		$data['sub_judul'] = 'Tambah List Material';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('list_material/v_tambah_material',$data);
		$this->view('templates/footer');
	}

    public function tambah() {
		if( $this->model('DataHandle')->tambahDataMaterial($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/ListOfMaterial/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/ListOfMaterial/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_lom', $id_table = 'id_lom') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssTambah');
			header('Location: ' . BASEURL . '/ListOfMaterial/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/ListOfMaterial/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'List Material';
		$data['sub_judul'] = 'Ubah Data List Material';
		$data['data_lom'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_lom',$id_table = 'id_lom', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('list_material/v_ubah_material', $data);
		$this->view('templates/footer');
	}
	
	public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataMaterial($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/ListOfMaterial/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/ListOfMaterial/index');
		 	exit;
		}
	}   
}