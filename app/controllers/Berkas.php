<?php

class Berkas extends Controller {
    public function __construct(){
        if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}

    public function index($nik) {
        $data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Modul Pengetahuan';
        $data['data_berkas'] = $this->model('DataHandle')->getAllById($table='tbl_berkas', $id_table='status', $id='APPROVE');
        $data['data_berkasku'] = $this->model('DataHandle')->getAllById($table='tbl_berkas', $id_table='nik_pengirim', $id=$nik);
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'Modul Pengetahuan';
		$data['sub_judul'] = 'Tambah Modul Pengetahuan';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/v_tambah_berkas',$data);
		$this->view('templates/footer');
    }
    
    public function tambahBerkas () {
        // var_dump($_POST);
		$judul = $_POST['judul'];
		$nama_berkas = $_POST['nama_berkas'];
		$stream = $_POST['stream'];
		$deskripsi = $_POST['deskripsi'];
        $nik_pengirim = $_POST['nik_pengirim'];
        $tgl = date("Y-m-d H:i:s");
        $status = "NEED APPROVE";
		
		$ekstensi_benar	= array('pdf','odp');
		$nama = $_FILES['evidence']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['evidence']['size'];
		$file_tmp = $_FILES['evidence']['tmp_name'];
		if (in_array($ekstensi, $ekstensi_benar) === true){
			if ($ukuran < 9044070){
				$nama = $nama_berkas .'.'. $ekstensi;
				move_uploaded_file($file_tmp, '../app/berkas/'.$nama);

				$data = array(
					'judul' => $judul,
					'nama_berkas' => $nama_berkas,
					'stream' => $stream,
					'deskripsi' => $deskripsi,
					'nik_pengirim' => $nik_pengirim,
					'tgl' => $tgl,
					'status' => $status
                 );
                 
                //  print_r($data);

				if ( $this->model('DataHandle')->tambahDataBerkas($data) > 0) {
					Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
					 exit;
				} else {
					Flasher::setFlash('gagal','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
					exit;
				}

					
			}
			else{
				Flasher::setFlash('Ukuran File','Terlalu Besar','CssTambah');
				header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
				exit;
			}
		}
		else {
			Flasher::setFlash('Format File','Tidak diijinkan','CssTambah');
			header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
			exit;
		}
	}

	public function getDetil($id){
		$data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Modul Pengetahuan';
		$data['data_berkas'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_berkas',$id_table = 'id_berkas', $id);

		$jumlah = $data['data_berkas']['dilihat'] + 1;
		$this->model('DataHandle')->hitungLihat($id,$jumlah);

		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/v_berkas_detil', $data);
        $this->view('templates/footer');
	}

	public function getBerkas($id){

		$data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Modul Pengetahuan';
        $data['data_berkas'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_berkas',$id_table = 'id_berkas', $id);
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/v_lihat_berkas', $data);
        $this->view('templates/footer');
	}

	public function hapusBerkas($id){
		$nik_pengirim = $_SESSION['nik'];
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_berkas', $id_table = 'id_berkas') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssTambah');
			header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
			exit;
		} else {
			Flasher::setFlash('Gagal','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/Berkas/index/'. $nik_pengirim .'');
			exit;
		}

	}
}