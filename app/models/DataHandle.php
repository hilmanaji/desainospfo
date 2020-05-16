<?php

class DataHandle {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //General Query
    public function getAll($table) {
        $this->db->query('SELECT * FROM ' . $table);
        return $this->db->resultSet();
    }
   
    public function getAllById($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllWhere ($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllByAsc($table, $orderBy) {
        $this->db->query('SELECT * FROM ' . $table . ' ORDER BY '. $orderBy .' ASC ');
        return $this->db->resultSet();
    }
    
    public function hapusData($id, $table, $id_table){
        $query = "DELETE FROM $table  WHERE $id_table = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekDataLogin($data){
        $query = "SELECT * FROM tbl_pengguna WHERE username = :username AND pass = :pass";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function cekPassLama($data){
        $query = "SELECT * FROM tbl_pengguna WHERE nik = :nik AND pass = :pass";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
		$this->db->bind('pass', $data['pass_lama']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function getDataLogin($data){
        $this->db->query('SELECT * FROM tbl_pengguna WHERE username = :username AND pass = :pass');
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);
        
        return $this->db->single(); 
    }

    public function getCountRow ($table, $kolom) {
        $this->db->query('SELECT COUNT('.$kolom.') as jumlah FROM '.$table.' ');
        return $this->db->single();
    }

    public function getCountRowById ($table, $kolom, $id, $kondisi) {
        $this->db->query('SELECT COUNT('.$kolom.') as jumlah FROM '.$table.' WHERE  '.$id.' = '.$kondisi.' ');
        return $this->db->single();
    }
    // End General Query

    // Spesifik Query User
    public function tambahDataPengguna($data) {
        $query = "INSERT INTO tbl_pengguna VALUES (:nik, :nama, :jk, :username, :pass, :unit, :jabatan, :role_user, :no_hp, :email)";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPengguna($data) {
        $query = "UPDATE tbl_pengguna SET nik = :nik, nama = :nama, jk = :jk, username = :username, pass = :pass, unit = :unit, jabatan = :jabatan, role_user = :role_user, no_hp = :no_hp, email = :email WHERE nik = :nik";
        
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahPassword($data) {
        $query = "UPDATE tbl_pengguna SET pass = :pass WHERE nik = :nik";
        
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('pass',$data['pass_baru']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Pesan
    public function getPesanMasuk($table, $id_table, $id, $orderBy) {
        //$this->db->query('SELECT id_pesan, nik_pengirim, nama, subjek, tgl_kirim FROM ' . $table . 'INNER JOIN tbl_pengguna ON  nik_pengirim = nik WHERE ' . $id_table . '= :id AND status_penerima=1 ORDER BY '. $orderBy .' DESC ');

        $this->db->query('SELECT id_pesan, nik_pengirim, nama, subjek, tgl_kirim FROM tbl_pesan INNER JOIN tbl_pengguna ON nik_pengirim = nik WHERE nik_penerima=:id AND status_penerima=1 ORDER BY tgl_kirim DESC;');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getPesanTerkirim($table, $id_table, $id, $orderBy) {
        // $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id AND status_pengirim=1 ORDER BY '. $orderBy .' DESC ');

        $this->db->query('SELECT id_pesan, nik_penerima, nama, subjek, tgl_kirim FROM tbl_pesan INNER JOIN tbl_pengguna ON nik_penerima = nik WHERE nik_pengirim=:id AND status_pengirim=1 ORDER BY tgl_kirim DESC;');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    
    public function kirimkanPesan($data) {
        $query = "INSERT INTO tbl_pesan VALUES ('', :nik_pengirim, :nik_penerima, :subjek, :pesan,'', :status_pengirim, :status_penerima)";

        $this->db->query($query);
        $this->db->bind('nik_pengirim', $data['nik_pengirim']);
        $this->db->bind('nik_penerima', $data['nik_penerima']);
        $this->db->bind('subjek', $data['subjek']);
        $this->db->bind('pesan', $data['pesan']);
        $this->db->bind('status_pengirim', $data['status_pengirim']);
        $this->db->bind('status_penerima', $data['status_penerima']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPesanMasuk($id, $status) {
        $query = "UPDATE tbl_pesan SET status_penerima = :status_penerima WHERE id_pesan = :id_pesan";

        $this->db->query($query);
        $this->db->bind('id_pesan', $id);
        $this->db->bind('status_penerima', $status);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPesanTerkirim($id, $status) {
        $query = "UPDATE tbl_pesan SET status_pengirim = :status_pengirim WHERE id_pesan = :id_pesan";

        $this->db->query($query);
        $this->db->bind('id_pesan', $id);
        $this->db->bind('status_pengirim', $status);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDetilPesan ($id) {
        $this->db->query('SELECT id_pesan, nik_pengirim, nama, subjek, pesan, tgl_kirim FROM tbl_pesan INNER JOIN tbl_pengguna ON nik_pengirim = nik WHERE id_pesan=:id ;');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    //Spesifik Query Design OSP
    public function getDetailDesign($id) {
        $this->db->query('SELECT
        tbl_design_osp.id_design,
        tbl_design_osp.id_project,
        tbl_design_osp.segment,
        tbl_design_osp.designator,
        tbl_design_osp.volume,
        tbl_lom.`desc`,
        tbl_lom.satuan
        FROM
        tbl_design_osp
        INNER JOIN tbl_lom ON tbl_design_osp.designator = tbl_lom.designator
        WHERE
        tbl_design_osp.id_project =:id;');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }


    

}