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

		$data['user'] = $this->model('DataHandle')->getDataLogin($post);
		
		$user = $this->model('DataHandle')->cekDataLogin($post);
		/*
		if (isset($user) > 0) {
			//if (isset($data['user'])) {
				//if ( isset($data['user'])) {
					//if ($data['user']['id_mitra'] == '') {
					//	echo "why";
						//header('Location: ' . BASEURL . '/login/index');	
					//}
					//else{
						$id_mitra = $data['user']['id_mitra'];
						$nama = $data['user']['nama'];
						$username = $data['user']['username'];
						$role_user = $data['user']['role_user'];
									
					//}
				//}
			//}

			// GET DATA MITRA
			
			$data_mitra['mitra'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_mitra', $id_table = 'id_mitra', $id_mitra);
			//if (isset($data_mitra['mitra'])) {
				//if ( isset($data_mitra['mitra'])) {
				//	if ($data_mitra['mitra'] === ''){
				//		echo "why";
						//header('Location: ' . BASEURL . '/login/index');
				//	}
				//	else{
						$nama_perusahaan = $data_mitra['mitra']['nama_perusahaan'];			
				//	}
				//}
			//}
			$_SESSION['nama'] = $nama;
			//Flasher::setSession($id_mitra, $nama, $username, $role_user, $nama_perusahaan);
			header('Location: ' . BASEURL . '/dashboard/index');

		// login pertama
		*/
		if( $this->model('DataHandle')->cekDataLogin($post) > 0) {
			
			//$id_mitra = $data['user']['id_mitra'];

			//$data_mitra['mitra'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_mitra', $id_table = 'id_mitra', $id_mitra);
			
			$_SESSION['id_user'] = $data['user']['id_user'];
			$_SESSION['nama'] = $data['user']['nama'];
			$_SESSION['username'] = $data['user']['username'];
			$_SESSION['role_user'] = $data['user']['role_user'];
			$_SESSION['nama_perusahaan'] = $data_mitra['mitra']['nama_perusahaan'];
			$_SESSION['id_mitra'] = $data['user']['id_mitra'];

			
			//$this->view('dashboard/index', $data_user);
			header('Location: ' . BASEURL . '/dashboard/index');
		
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