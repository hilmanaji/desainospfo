<?php

class Validasi extends Controller {
    public function __construct(){
        if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}

    public function index() {
		$data['judul'] = 'Validasi Pengetahuan';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';
        $data['data_berkas'] = $this->model('DataHandle')->getAllById($table='tbl_berkas', $id_table='status', $id='NEED APPROVE');
        $data['data_design'] = $this->model('DataHandle')->getAllById($table='tbl_project', $id_table='status', $id='BELUM VALIDASI');

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('validasi/index', $data);
        $this->view('templates/footer');
    }

    public function approveBerkas($id) {
        $id_berkas = $id;
        $status = 'APPROVE';

        $data = array(
            'id_berkas' => $id_berkas,
            'status' => $status
         );

        if( $this->model('DataHandle')->statusBerkas ($data) > 0) {
            Flasher::setFlash('Berhasil','diapprove','CssUpdate');
            header('Location: ' . BASEURL . '/Validasi/index/');
            exit;
       } else {
            Flasher::setFlash('Gagal','diapprove','CssHapus');
            header('Location: ' . BASEURL . '/Validasi/index/');
            exit;
       }
    }

    public function rejectBerkas($id) {
        $id_berkas = $id;
        $status = 'REJECT';

        $data = array(
            'id_berkas' => $id_berkas,
            'status' => $status
         );

        if( $this->model('DataHandle')->statusBerkas ($data) > 0) {
            Flasher::setFlash('Berhasil','diapprove','CssUpdate');
            header('Location: ' . BASEURL . '/Validasi/index/');
            exit;
       } else {
            Flasher::setFlash('Gagal','diapprove','CssHapus');
            header('Location: ' . BASEURL . '/Validasi/index/');
            exit;
       }
    }
}