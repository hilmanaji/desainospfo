<?php

class Login extends Controller {
    public function index (){
		$this->view('login/index');
	}

	public function cekLogin () {


		$username = $_POST["username"];
		$password = md5($_POST["pass"]);
		
		// GET DATA USER
		$post = array(
			'username' => $username,
			'pass' => $password
		);

		$data['pengguna'] = $this->model('DataHandle')->getDataLogin($post);
		
		$pengguna = $this->model('DataHandle')->cekDataLogin($post);
		
		// login pertama
		if( $this->model('DataHandle')->cekDataLogin($post) > 0) {
			
			//$id_mitra = $data['user']['id_mitra'];
			//$data_mitra['mitra'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_mitra', $id_table = 'id_mitra', $id_mitra);
	
			$_SESSION['nik'] = $data['pengguna']['nik'];
			$_SESSION['nama'] = $data['pengguna']['nama'];
			$_SESSION['username'] = $data['pengguna']['username'];
			$_SESSION['role_user'] = $data['pengguna']['role_user'];

			
			//$this->view('dashboard/index', $data_user);
			header('Location: ' . BASEURL . '/Pengguna/detilProfile/' . $_SESSION['nik'] .'');
		
		} else {
			//echo "ehy";
			header('Location: ' . BASEURL . '/login/index');
		}
	}

	public function logout () { 
 		session_destroy();  
 		header('Location: ' . BASEURL . '/login/index');
	}
}