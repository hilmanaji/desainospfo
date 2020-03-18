<?php 

class Dashboard extends Controller {
	public function __construct(){
		// if(!isset($_SESSION["username"]))  {  
		// 	header('Location: ' . BASEURL . '/login/index');  
		// }
		
	}
	
	public function index () {
		$data['judul'] = 'Dashboard';
		// $data['jumlah_kontrak'] = $this->model('DataHandle')->getCountRow ($table = 'tbl_no_kontrak', $kolom = 'no_kontrak');
		// $data['jumlah_po'] = $this->model('DataHandle')->getCountRow ($table = 'tbl_po', $kolom = 'no_po');
		// $data['jumlah_project'] = $this->model('DataHandle')->getCountRow ($table = 'tbl_lop', $kolom = 'nama_lokasi');
		// $data['jumlah_project'] = $this->model('DataHandle')->getCountRow ($table = 'tbl_mitra', $kolom = 'nama_perusahaan');

		// $data['jumlah_installasi'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '1');
		// $data['jumlah_aanwijzing'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '2');
		// $data['jumlah_matdev'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '3');
		// $data['jumlah_perijinan'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '4');
		// $data['jumlah_comtest'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '5');
		// $data['jumlah_ut'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '6');
		// $data['jumlah_bast'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_progres_project', $kolom = 'id_kegiatan' , $id = 'id_kegiatan', $kondisi = '7');
		
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar',$data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}