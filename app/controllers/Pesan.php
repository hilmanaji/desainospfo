<?php

class Pesan extends Controller {
    public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}

    public function index($nik) {
        
        $data['judul'] = 'Pesan';
        $data['sub_judul'] = 'Kotak Pesan Masuk';
        $data['data_pesan'] = $this->model('DataHandle')->getPesanMasuk($table = 'tbl_pesan', $id_table = 'nik_penerima', $id=$nik, $orderBy='tgl_kirim');

        // $nik_penerima = $data['data_pesan']['nik_pengirim'];
        // $data['pengirim'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_pengguna', $id_table = 'nik', $id=$nik_penerima);
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pesan/index', $data);
        $this->view('templates/footer');
    }

    public function buatPesan () {
        $data['judul'] = 'Buat Pesan';
        $data['sub_judul'] = 'Kirim Pesan Baru';
        $data['data_pengguna'] = $this->model('DataHandle')->getAllByAsc($table = 'tbl_pengguna', $orderBy = 'nama');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pesan/v_buat_pesan', $data);
        $this->view('templates/footer'); 
    }

    public function kirimPesan() {

        // var_dump($_POST)
		if( $this->model('DataHandle')->kirimkanPesan($_POST) > 0) {
			Flasher::setFlash('Berhasil','dikirimkan','CssTambah');
			header('Location: ' . BASEURL . '/pesan/buatPesan/'. $_SESSION['nik'] .'');
			exit;
		} else {
			Flasher::setFlash('gagal','dikirimkan','CssHapus');
			header('Location: ' . BASEURL . '/pesan/buatPesan/'. $_SESSION['nik'] .'');
			exit;
		}
    }
    
    public function hapusPesanMasuk($id) {
		if( $this->model('DataHandle')->hapusPesanMasuk($id, $status='0' ) > 0) {
			Flasher::setFlash('Berhasil','dikirimkan','CssTambah');
			header('Location: ' . BASEURL . '/pesan/index'. $_SESSION['nik'] .'');
			exit;
		} else {
			Flasher::setFlash('gagal','dikirimkan','CssHapus');
			header('Location: ' . BASEURL . '/pesan/index'. $_SESSION['nik'] .'');
			exit;
		}
    }
    
    public function hapusPesanTerkirim($id) {
		if( $this->model('DataHandle')->hapusPesanTerkirim($id, $status='0' ) > 0) {
			Flasher::setFlash('Berhasil','dikirimkan','CssTambah');
			header('Location: ' . BASEURL . '/pesan/pesanTerkirim'. $_SESSION['nik'] .'');
			exit;
		} else {
			Flasher::setFlash('gagal','dikirimkan','CssHapus');
			header('Location: ' . BASEURL . '/pesan/pesanTerkirim'. $_SESSION['nik'] .'');
			exit;
		}
	}

    public function pesanTerkirim ($nik) {
        $data['judul'] = 'Pesan';
        $data['sub_judul'] = 'Pesan Terkirim';
        $data['data_pesan'] = $this->model('DataHandle')->getPesanTerkirim($table = 'tbl_pesan', $id_table = 'nik_pengirim', $id=$nik, $orderBy='tgl_kirim');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pesan/v_pesan_terkirim', $data);
        $this->view('templates/footer'); 
    }

    public function detilPesan ($id) {
        $data['judul'] = 'Pesan';
        $data['sub_judul'] = 'Detail Pesan';
        $data['data_pesan'] = $this->model('DataHandle')->getDetilPesan($id_pesan=$id);

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pesan/v_detil_pesan', $data);
        $this->view('templates/footer');

    }
}