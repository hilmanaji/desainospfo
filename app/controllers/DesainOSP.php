<?php

class DesainOSP extends Controller {
    public function __construct(){
        if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}

    public function index() {
        $data['judul'] = 'Design OSP FO';
        $data['sub_judul'] = 'Tambah Data Design';
        // $data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_project');
        $data['data_project'] = $this->model('DataHandle')->getAllById($table='tbl_project', $id_table='sts', $id='SUDAH VALIDASI');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('desainosp/index', $data);
        $this->view('templates/footer');
    }

    public function detailDesign($id) {
        $data['judul'] = 'Design OSP FO';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';
        $data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_project',$id_table = 'id_project', $id);
        $data['data_design'] = $this->model('DataHandle')->getDetailDesignAll($id);
        $data['data_feeder'] = $this->model('DataHandle')->getDetailDesign($id, $segment = 'FEEDER');
        $data['data_distribusi'] = $this->model('DataHandle')->getDetailDesign($id, $segment = 'DISTRIBUSI');
        $data['data_dropcore'] = $this->model('DataHandle')->getDetailDesign($id, $segment = 'DROP CABLE');
        $data['data_ikr'] = $this->model('DataHandle')->getDetailDesign($id, $segment = 'IKR & IKG');
        $data['data_lom'] = $this->model('DataHandle')->getAll($table = 'tbl_lom');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('desainosp/v_buat_design_osp', $data);
        $this->view('templates/footer');
    }

    public function tambahMaterial () {
        // var_dump($_POST);
        $id_project = $_POST['id_project'];
        if( $this->model('DataHandle')->simpanMaterial($_POST) > 0) {
			Flasher::setFlash('Material Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
			exit;
		} else {
			Flasher::setFlash('Material gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
			exit;
		}
    }

    public function hapusMaterial ($id, $id_project) {
        if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_design_osp', $id_table = 'id_design') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
			exit;
		}
    }

    public function ubahVolume($id, $id_project){
        $data['judul'] = 'Design OSP FO';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';

        $data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_project',$id_table = 'id_project', $id_project);
        $data['data_design'] = $this->model('DataHandle')->getDetailDesignById($id);

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('desainosp/v_ubah_design_osp', $data);
        $this->view('templates/footer');
    }

    public function simpanVolume() {
        $id_project = $_POST["id_project"];

		if( $this->model('DataHandle')->ubahDataVolume($_POST) > 0) {
            Flasher::setFlash('Berhasil','diubah','CssUpdate');
            header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
            exit;
        } else {
            Flasher::setFlash('gagal','diubah','CssHapus');
            header('Location: ' . BASEURL . '/DesainOSP/detailDesign/'. $id_project .'');
            exit;
       }
    }
}