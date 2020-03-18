<div class="judul">
    <h4>Setting / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <a href="<?= BASEURL; ?>/user/tambahData">Tambah Data</a>
        
            <span>Cari :</span>
            <input type="text" value="" name="" placeholder="Cari Data"> 
            <input type="submit" value="Cari" class="tombol">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>NAMA MITRA</th>
                <th>NAMA LENGKAP</th>
                <th>JENIS KELAMIN</th>
                <th>USERNAME</th>
                <!-- <th>PASSWORD</th> -->
                <th>JENIS USER</th>
                <th>NO HANDPHONE</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_user'] as $user ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <?php 
                        $id_mitra = $user['id_mitra'];
                        $data['mitra'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_mitra',$id_table = 'id_mitra', $id_mitra);
                        ?>
                    <?= $data['mitra']['nama_perusahaan'] ?>
                </td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['jk'] ?></td>
                <td><?= $user['username'] ?></td>
                <!-- <td><?= $user['password'] ?></td> -->
                <td><?= $user['role_user'] ?></td>
                <td><?= $user['no_hp'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/user/getUbah/<?= $user['id_user'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id_user'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

