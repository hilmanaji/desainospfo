<?php

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() {
        if ( isset($_SESSION['flash']) ) {
            echo'<div class="' .$_SESSION['flash']['tipe']. '">Data ' . $_SESSION['flash']['pesan'] . '
            ' . $_SESSION['flash']['aksi'] . '
            </div>';
        }

        unset($_SESSION['flash']);
    }

    public static function startSession() {
        if($_SESSION["role_user"] == '') {
			header('Location: ' . BASEURL . '/login/index');
		}
		else if($_SESSION["role_user"] == 'Admin Mitra') {
			header('Location: ' . BASEURL . '/login/index');
        }
        else if($_SESSION["role_user"] == 'Admin Procurement') {
			header('Location: ' . BASEURL . '/login/index');
		}
    }
}