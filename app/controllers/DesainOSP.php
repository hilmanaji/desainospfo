<?php

class DesainOSP extends Controller {
    public function __construct(){
       
	}

    public function index() {
        $data['judul'] = 'Design OSP FO';
        $data['sub_judul'] = 'Tambah Data Design';
        $data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_project');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('desainosp/index', $data);
        $this->view('templates/footer');
    }

    public function detailDesign($id) {
        $data['judul'] = 'Design OSP FO';
        $data['sub_judul'] = 'Data Material dan Jasa OSP FO';
        $data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_project',$id_table = 'id_project', $id);
        $data['data_design'] = $this->model('DataHandle')->getDetailDesign($id);
        $data['data_lom'] = $this->model('DataHandle')->getAll($table = 'tbl_lom');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('desainosp/v_buat_design_osp', $data);
        $this->view('templates/footer');
    }
}