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
    
    public function hapusData($id, $table, $id_table){
        $query = "DELETE FROM $table  WHERE $id_table = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekDataLogin($data){
        $query = "SELECT * FROM tbl_user WHERE username = :username AND pass = :pass";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function getDataLogin($data){
        $this->db->query('SELECT * FROM tbl_user WHERE username = :username AND pass = :pass');
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

    //Query Data Project
    public function getProject() {
        $this->db->query('SELECT
        tbl_lop.id_project,
        tbl_po.no_po,
        tbl_regional.regional,
        tbl_witel.witel,
        tbl_datel.datel,
        tbl_sto.nama_sto,
        tbl_lop.nama_lokasi,
        tbl_lop.jumlah_odp,
        tbl_lop.jumlah_port,
        tbl_lop.toc,
        tbl_lop.nilai_material,
        tbl_lop.nilai_jasa,
        tbl_lop.total,
        tbl_lop.status_progress,
        tbl_lop.id_mitra
        FROM
        tbl_lop ,
        tbl_regional,
        tbl_witel,
        tbl_datel,
        tbl_sto,
        tbl_po
        WHERE
        tbl_lop.id_po = tbl_po.id_po and tbl_lop.id_regional = tbl_regional.id_regional and tbl_lop.id_witel = tbl_witel.id_witel and tbl_lop.id_datel = tbl_datel.id_datel and tbl_lop.id_sto = tbl_sto.id_sto');
        return $this->db->resultSet();
    }

    public function getProjectById($id_mitra) {
        $this->db->query('SELECT
        tbl_lop.id_project,
        tbl_po.no_po,
        tbl_regional.regional,
        tbl_witel.witel,
        tbl_datel.datel,
        tbl_sto.nama_sto,
        tbl_lop.nama_lokasi,
        tbl_lop.jumlah_odp,
        tbl_lop.jumlah_port,
        tbl_lop.toc,
        tbl_lop.nilai_material,
        tbl_lop.nilai_jasa,
        tbl_lop.total,
        tbl_lop.status_progress,
        tbl_lop.id_mitra
        FROM
        tbl_lop ,
        tbl_regional,
        tbl_witel,
        tbl_datel,
        tbl_sto,
        tbl_po
        WHERE
        tbl_lop.id_po = tbl_po.id_po and tbl_lop.id_regional = tbl_regional.id_regional and tbl_lop.id_witel = tbl_witel.id_witel and tbl_lop.id_datel = tbl_datel.id_datel and tbl_lop.id_sto = tbl_sto.id_sto and tbl_lop.id_mitra = :id_mitra');
        $this->db->bind('id_mitra', $id_mitra);

        return $this->db->resultSet();
    }

    public function getProjectByIdp($id_project) {
        $this->db->query('SELECT
        tbl_lop.id_project,
        tbl_po.no_po,
        tbl_lop.id_po,
        tbl_lop.id_regional,
        tbl_regional.regional,
        tbl_lop.id_witel,
        tbl_witel.witel,
        tbl_lop.id_datel,
        tbl_datel.datel,
        tbl_lop.id_sto,
        tbl_sto.kode_sto,
        tbl_lop.nama_lokasi,
        tbl_lop.jumlah_odp,
        tbl_lop.jumlah_port,
        tbl_lop.toc,
        tbl_lop.nilai_material,
        tbl_lop.nilai_jasa,
        tbl_lop.total,
        tbl_lop.status_progress,
        tbl_mitra.nama_perusahaan,
        tbl_lop.id_mitra
        FROM
        tbl_lop ,
        tbl_regional,
        tbl_witel,
        tbl_datel,
        tbl_sto,
        tbl_mitra,
        tbl_po
        WHERE
        tbl_lop.id_po = tbl_po.id_po and tbl_lop.id_regional = tbl_regional.id_regional and tbl_lop.id_witel = tbl_witel.id_witel and tbl_lop.id_datel = tbl_datel.id_datel and tbl_lop.id_sto = tbl_sto.id_sto and tbl_lop.id_mitra = tbl_mitra.id_mitra and tbl_lop.id_project = :id_project');
        $this->db->bind('id_project', $id_project);

        return $this->db->single();
    }

    // Spesifik Query Regional
    public function tambahDataRegional($data){
        $query = "INSERT INTO tbl_regional VALUES ('', :regional)";

        $this->db->query($query);
        $this->db->bind('regional', $data['regional']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataRegional($data) {
        $query = "UPDATE tbl_regional SET regional = :regional WHERE id_regional = :id_regional";
        
        $this->db->query($query);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('regional', $data['regional']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Witel
    public function tambahDatawitel($data){
        $query = "INSERT INTO tbl_witel VALUES ('', :id_regional, :witel)";

        $this->db->query($query);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataWitel($data) {
        $query = "UPDATE tbl_witel SET id_regional = :id_regional, witel = :witel WHERE id_witel = :id_witel";
        
        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Datel
    public function tambahDataDatel($data) {
        $query = "INSERT INTO tbl_datel VALUES ('', :id_witel, :datel)";

        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('datel', $data['datel']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataDatel($data) {
        $query = "UPDATE tbl_datel SET id_witel = :id_witel, datel = :datel WHERE id_datel = :id_datel";
        
        $this->db->query($query);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('datel', $data['datel']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query STO
    public function tambahDataSto($data) {
        $query = "INSERT INTO tbl_sto VALUES ('', :id_datel, :kode_sto, :nama_sto)";

        $this->db->query($query);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('kode_sto', $data['kode_sto']);
        $this->db->bind('nama_sto', $data['nama_sto']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSto() {
        $query = "UPDATE tbl_sto SET id_datel = :id_datel, kode_sto = :kode_sto, nama_sto = :nama_sto WHERE id_sto = :id_sto";
        
        $this->db->query($query);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('kode_sto', $data['kode_sto']);
        $this->db->bind('nama_sto', $data['nama_sto']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Kontrak
    public function tambahDataKontrak($data) {
        $query = "INSERT INTO tbl_no_kontrak VALUES ('', :no_kontrak, :jenis_kontrak)";

        $this->db->query($query);
        $this->db->bind('no_kontrak', $data['no_kontrak']);
        $this->db->bind('jenis_kontrak', $data['jenis_kontrak']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKontrak($data) {
        $query = "UPDATE tbl_no_kontrak SET no_kontrak = :no_kontrak, jenis_kontrak = :jenis_kontrak WHERE id_kontrak = :id_kontrak";
        
        $this->db->query($query);
        $this->db->bind('id_kontrak', $data['id_kontrak']);
        $this->db->bind('no_kontrak', $data['no_kontrak']);
        $this->db->bind('jenis_kontrak', $data['jenis_kontrak']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query PurchaseOrder
    public function tambahDataPo($data) {
        $query = "INSERT INTO tbl_po VALUES ('', :no_po, :jenis_po, :tgl_mulai, :tgl_selesai, :nilai_material, :nilai_jasa, :total, :status_po)";

        $this->db->query($query);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('jenis_po', $data['jenis_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_po', $data['status_po']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPo($data) {
        $query = "UPDATE tbl_po SET no_po = :no_po, jenis_po = :jenis_po, tgl_mulai = :tgl_mulai, tgl_selesai = :tgl_selesai, nilai_material = :nilai_material, nilai_jasa = :nilai_jasa, total = :total, status_po = :status_po WHERE id_po = :id_po";

        $this->db->query($query);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('jenis_po', $data['jenis_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_po', $data['status_po']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Project
    public function tambahDataProject($data) {
        $query = "INSERT INTO tbl_lop VALUES (:id_project, :id_po, :id_regional, :id_witel, :id_datel, :id_sto, :nama_lokasi, :jumlah_odp, :jumlah_port, :toc, :nilai_material, :nilai_jasa, :total, :status_progress, :id_mitra)";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('nama_lokasi', $data['nama_lokasi']);
        $this->db->bind('jumlah_odp', $data['jumlah_odp']);
        $this->db->bind('jumlah_port', $data['jumlah_port']);
        $this->db->bind('toc', $data['toc']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_progress', $data['status_progress']);
        $this->db->bind('id_mitra', $data['id_mitra']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function ubahDataProject($data) {
        $query = "UPDATE tbl_lop SET id_po = :id_po, id_regional = :id_regional, id_witel = :id_witel, id_datel = :id_datel, id_sto = :id_sto, nama_lokasi = :nama_lokasi, jumlah_odp = :jumlah_odp, jumlah_port = :jumlah_port, toc = :toc, nilai_material = :nilai_material, nilai_jasa = :nilai_jasa, total = :total, id_mitra = :id_mitra, status_progress = :status_progress WHERE id_project = :id_project";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('nama_lokasi', $data['nama_lokasi']);
        $this->db->bind('jumlah_odp', $data['jumlah_odp']);
        $this->db->bind('jumlah_port', $data['jumlah_port']);
        $this->db->bind('toc', $data['toc']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_progress', $data['status_progress']);
        $this->db->bind('id_mitra', $data['id_mitra']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Mitra
    public function tambahDataMitra($data) {
        $query = "INSERT INTO tbl_mitra VALUES ('', :nama_perusahaan, :alamat, :email, :telp, :nama_direktur, :no_hp)";

        $this->db->query($query);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('nama_direktur', $data['nama_direktur']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMitra($data) {
        $query = "UPDATE tbl_mitra SET nama_perusahaan = :nama_perusahaan, alamat = :alamat, alamat = :alamat, email = :email, telp = :telp, nama_direktur = :nama_direktur, no_hp = :no_hp WHERE id_mitra = :id_mitra";

        $this->db->query($query);

        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('nama_direktur', $data['nama_direktur']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query User
    public function tambahDataUser($data) {
        $query = "INSERT INTO tbl_user VALUES ('', :id_mitra, :nama, :jk, :username, :pass, :role_user, :no_hp, :email)";

        $this->db->query($query);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data) {
        $query = "UPDATE tbl_user SET id_mitra = :id_mitra, nama = :nama, jk = :jk, username = :username, pass = :pass, role_user = :role_user, no_hp = :no_hp, email = :email WHERE id_user = :id_user";
        
        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Status PO
    public function tambahDataStatusPo ($data) {
        $query = "INSERT INTO tbl_status_po VALUES ('', :status_po)";

        $this->db->query($query);
        $this->db->bind('status_po', $data['status_po']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataStatusPo ($data) {
        $query = "UPDATE tbl_status_po SET status_po = :status_po WHERE id_status_po = :id_status_po";
        
        $this->db->query($query);
        $this->db->bind('id_status_po', $data['id_status_po']);
        $this->db->bind('status_po', $data['status_po']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Status Project
    public function tambahDataStatusProject ($data) {
        $query = "INSERT INTO tbl_status_project VALUES ('', :kegiatan)";

        $this->db->query($query);
        $this->db->bind('kegiatan', $data['kegiatan']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataStatusProject ($data) {
        $query = "UPDATE tbl_status_project SET kegiatan = :kegiatan WHERE id_kegiatan = :id_kegiatan";
        
        $this->db->query($query);
        $this->db->bind('id_kegiatan', $data['id_kegiatan']);
        $this->db->bind('kegiatan', $data['kegiatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //Query Tambah data progress
    public function tambahDataProgres ($data) {
        $query = "INSERT INTO tbl_progres_project VALUES ('', :id_project, :id_kegiatan, :tgl_mulai, :tgl_selesai, :keterangan, :evidence)";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('id_kegiatan', $data['id_kegiatan']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('evidence', $data['evidence']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Query Get Data Progres Project
    public function getDataProgresById ($id) {
        $this->db->query('SELECT
        tbl_progres_project.id_progres_project,
        tbl_progres_project.id_project,
        tbl_status_project.kegiatan,
        tbl_progres_project.tgl_mulai,
        tbl_progres_project.tgl_selesai,
        tbl_progres_project.keterangan,
        tbl_progres_project.evidence
        FROM
        tbl_progres_project
        INNER JOIN tbl_status_project ON tbl_progres_project.id_kegiatan = tbl_status_project.id_kegiatan AND tbl_progres_project.id_project = :id ');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    // Query Get Data Progres Project
    public function getDataProgresByIdp ($id) {
        $this->db->query('SELECT
        tbl_progres_project.id_progres_project,
        tbl_progres_project.id_project,
        tbl_progres_project.id_kegiatan,
        tbl_status_project.kegiatan,
        tbl_progres_project.tgl_mulai,
        tbl_progres_project.tgl_selesai,
        tbl_progres_project.keterangan,
        tbl_progres_project.evidence
        FROM
        tbl_progres_project
        INNER JOIN tbl_status_project ON tbl_progres_project.id_kegiatan = tbl_status_project.id_kegiatan AND tbl_progres_project.id_progres_project = :id ');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function ubahDataProgresProject ($data) {
        $query = "UPDATE tbl_progres_project SET id_project = :id_project, id_kegiatan = :id_kegiatan, tgl_mulai = :tgl_mulai, tgl_selesai = :tgl_selesai, keterangan = :keterangan, evidence = :evidence WHERE id_progres_project = :id_progres_project";

        $this->db->query($query);
        $this->db->bind('id_progres_project', $data['id_progres_project']);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('id_kegiatan', $data['id_kegiatan']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('evidence', $data['evidence']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    //Query Tambah data progress
    public function tambahDataProgresTagihan ($data) {
        $query = "INSERT INTO tbl_progres_po VALUES ('', :id_po, :id_status_po, :tgl_mulai, :tgl_selesai, :keterangan, :evidence)";

        $this->db->query($query);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('id_status_po', $data['id_status_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('evidence', $data['evidence']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Query Get Data Progres Tagihan banyak
    public function getDataTagihanById ($id) {
        
        $this->db->query('SELECT
        tbl_progres_po.id_progres,
        tbl_progres_po.id_po,
        tbl_status_po.status_po,
        tbl_progres_po.tgl_mulai,
        tbl_progres_po.tgl_selesai,
        tbl_progres_po.keterangan,
        tbl_progres_po.evidence
        FROM
        tbl_progres_po
        INNER JOIN tbl_status_po ON tbl_progres_po.id_status_po = tbl_status_po.id_status_po AND tbl_progres_po.id_po = :id ');

        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    // Query Get Data Progres Tagihan single
    public function getDataProgresTagihanById ($id) {
        $this->db->query('SELECT
        tbl_progres_po.id_progres,
        tbl_progres_po.id_po,
        tbl_progres_po.id_status_po,
        tbl_status_po.status_po,
        tbl_progres_po.tgl_mulai,
        tbl_progres_po.tgl_selesai,
        tbl_progres_po.keterangan,
        tbl_progres_po.evidence
        FROM
        tbl_progres_po
        INNER JOIN tbl_status_po ON tbl_progres_po.id_status_po = tbl_status_po.id_status_po AND tbl_progres_po.id_progres = :id ');

        $this->db->bind('id', $id);
        return $this->db->single();  
    }

    public function ubahDataProgresPo($data) {
        $query = "UPDATE tbl_progres_po SET id_po = :id_po, id_status_po = :id_status_po, tgl_mulai = :tgl_mulai, tgl_selesai = :tgl_selesai, keterangan = :keterangan, evidence = :evidence WHERE id_progres = :id_progres";

        $this->db->query($query);
        $this->db->bind('id_progres', $data['id_progres']);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('id_status_po', $data['id_status_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('evidence', $data['evidence']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }


    

}