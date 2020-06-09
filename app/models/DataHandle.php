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

    //Spesifik Query Project
    public function tambahDataProject($data){
        $query = "INSERT INTO tbl_project VALUES (:id_project, :nama_desain, :jenis_fttx, :jenis_project, :lokasi_project, :witel, :sto, :odc, :status)";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('nama_desain', $data['nama_desain']);
        $this->db->bind('jenis_fttx', $data['jenis_fttx']);
        $this->db->bind('jenis_project', $data['jenis_project']);
        $this->db->bind('lokasi_project', $data['lokasi_project']);
        $this->db->bind('witel', $data['witel']);
        $this->db->bind('sto', $data['sto']);
        $this->db->bind('odc', $data['odc']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataProject($data){
        $query = "UPDATE tbl_project SET nama_desain = :nama_desain, jenis_fttx = :jenis_fttx, jenis_project = :jenis_project, lokasi_project = :lokasi_project, witel = :witel, sto = :sto, odc = :odc WHERE id_project = :id_project";
        
        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('nama_desain', $data['nama_desain']);
        $this->db->bind('jenis_fttx', $data['jenis_fttx']);
        $this->db->bind('jenis_project', $data['jenis_project']);
        $this->db->bind('lokasi_project', $data['lokasi_project']);
        $this->db->bind('witel', $data['witel']);
        $this->db->bind('sto', $data['sto']);
        $this->db->bind('odc', $data['odc']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //Spesifiq Query List Of Material
    public function tambahDataMaterial($data) {
        $query = "INSERT INTO tbl_lom VALUES ('',:designator, :deskripsi, :satuan, :jenis_material, :jenis_alpro, :jenis_pekerjaan)";

        $this->db->query($query);
        $this->db->bind('designator', $data['designator']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('jenis_material', $data['jenis_material']);
        $this->db->bind('jenis_alpro', $data['jenis_alpro']);
        $this->db->bind('jenis_pekerjaan', $data['jenis_pekerjaan']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMaterial($data){
        $query = "UPDATE tbl_lom SET designator = :designator, deskripsi = :deskripsi, satuan = :satuan, jenis_material = :jenis_material, jenis_alpro = :jenis_alpro, jenis_pekerjaan = :jenis_pekerjaan WHERE id_lom = :id_lom";

        $this->db->query($query);
        $this->db->bind('id_lom', $data['id_lom']);
        $this->db->bind('designator', $data['designator']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('jenis_material', $data['jenis_material']);
        $this->db->bind('jenis_alpro', $data['jenis_alpro']);
        $this->db->bind('jenis_pekerjaan', $data['jenis_pekerjaan']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Pengguna
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
        $query = "UPDATE tbl_pengguna SET nik = :nik, nama = :nama, jk = :jk, username = :username, unit = :unit, jabatan = :jabatan, role_user = :role_user, no_hp = :no_hp, email = :email WHERE nik = :nik";
        
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        // $this->db->bind('pass', md5($data['pass']));
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
        $query = "INSERT INTO tbl_pesan VALUES ('', :nik_pengirim, :nik_penerima, :subjek, :pesan, :tgl_kirim, :status_pengirim, :status_penerima)";

        $this->db->query($query);
        $this->db->bind('nik_pengirim', $data['nik_pengirim']);
        $this->db->bind('nik_penerima', $data['nik_penerima']);
        $this->db->bind('subjek', $data['subjek']);
        $this->db->bind('pesan', $data['pesan']);
        $this->db->bind('tgl_kirim', date("Y-m-d H:i:s"));
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
    public function getDetailDesign($id, $segment) {
        $this->db->query('SELECT
        tbl_design_osp.id_design,
        tbl_design_osp.id_project,
        tbl_design_osp.segment,
        tbl_design_osp.designator,
        tbl_design_osp.volume,
        tbl_lom.deskripsi,
        tbl_lom.satuan,
        tbl_lom.jenis_material
        FROM
        tbl_design_osp
        INNER JOIN tbl_lom ON tbl_design_osp.designator = tbl_lom.designator
        WHERE
        tbl_design_osp.id_project =:id and tbl_design_osp.segment = :segment ;');

        $this->db->bind('id', $id);
        $this->db->bind('segment', $segment);
        return $this->db->resultSet();
    }

    public function getDetailDesignAll($id) {
        $this->db->query('SELECT
        tbl_design_osp.id_design,
        tbl_design_osp.id_project,
        tbl_design_osp.segment,
        tbl_design_osp.designator,
        tbl_design_osp.volume,
        tbl_lom.deskripsi,
        tbl_lom.satuan,
        tbl_lom.jenis_material
        FROM
        tbl_design_osp
        INNER JOIN tbl_lom ON tbl_design_osp.designator = tbl_lom.designator
        WHERE
        tbl_design_osp.id_project =:id;');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getDetailDesignById($id) {
        $this->db->query('SELECT
        tbl_design_osp.id_design,
        tbl_design_osp.id_project,
        tbl_design_osp.segment,
        tbl_design_osp.designator,
        tbl_design_osp.volume,
        tbl_lom.deskripsi,
        tbl_lom.satuan,
        tbl_lom.jenis_material
        FROM
        tbl_design_osp
        INNER JOIN tbl_lom ON tbl_design_osp.designator = tbl_lom.designator
        WHERE
        tbl_design_osp.id_design =:id;');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function simpanMaterial ($data) {
        $query = "INSERT INTO tbl_design_osp VALUES ('', :id_project, :segment, :designator, :volume)";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('segment', $data['segment']);
        $this->db->bind('designator', $data['designator']);
        $this->db->bind('volume', $data['volume']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataVolume($data){
        $query = "UPDATE tbl_design_osp SET volume = :volume WHERE id_design = :id_design";

        $this->db->query($query);
        $this->db->bind('id_design', $data['id_design']);
        $this->db->bind('volume', $data['volume']);
        
        $this->db->execute();

        return $this->db->rowCount();
        
    }

    //spesifik Query Obrolan

    public function getListObrolan ($id) {
        $this->db->query('SELECT
        tbl_obrolan.nik_pengirim,
        tbl_obrolan.nik_penerima
        FROM
        tbl_obrolan WHERE nik_penerima = :nik_penerima
        GROUP BY
        tbl_obrolan.nik_pengirim ORDER BY tgl_pesan ASC
        ');

        $this->db->bind('nik_penerima', $id);
        return $this->db->resultSet();
    }

    //spesifik Query Berkas

    public function tambahDataBerkas($data) {
        $query = "INSERT INTO tbl_berkas VALUES ('', :judul, :nama_berkas, :stream, :deskripsi, :nik_pengirim, :tgl, :status)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('nama_berkas', $data['nama_berkas']);
        $this->db->bind('stream', $data['stream']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('nik_pengirim', $data['nik_pengirim']);
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('status', $data['status']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    //Spesifik Query Validasi

    public function statusBerkas($data) {
        $query = "UPDATE tbl_berkas SET status = :status WHERE id_berkas = :id_berkas";

        $this->db->query($query);
        $this->db->bind('id_berkas', $data['id_berkas']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}