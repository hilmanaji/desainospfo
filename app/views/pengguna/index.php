<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <a href="<?= BASEURL; ?>/Pengguna/tambahData">Tambah Data</a>
        
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
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Username</th>
                <th>Unit</th>
                <th>Jabatan</th>
                <th>Jenis User</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_pengguna'] as $pengguna ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pengguna['nama'] ?></td>
                <td><?= $pengguna['jk'] ?></td>
                <td><?= $pengguna['username'] ?></td>
                <td><?= $pengguna['unit'] ?></td>
                <td><?= $pengguna['jabatan'] ?></td>
                <td><?= $pengguna['role_user'] ?></td>
                <td><?= $pengguna['no_hp'] ?></td>
                <td><?= $pengguna['email'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/pengguna/getUbah/<?= $pengguna['nik'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/pengguna/hapus/<?= $pengguna['nik'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

