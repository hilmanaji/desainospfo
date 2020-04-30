<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
    <div class="navigasi">
            <?php Flasher::flashPesan(); ?>   
    </div>
</div>
<div class="data-table">
    <div class="menuPesan">
        <div class="sidebar">
            <a class="compose" href="<?= BASEURL;?>/Pesan/buatPesan">Buat Pesan</a>
            <br><br>
            <a class="active" href="">Kotak Masuk</a>
            <a href="<?= BASEURL;?>/Pesan/pesanTerkirim/<?= $_SESSION['nik'] ?>">Pesan Terkirim</a>
        </div>
    </div>

    <div class="mainPesan">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Pengirim</th>
                <th>Subjek</th>
                <th>Tanggal Pesan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ( $data['data_pesan'] as $pesan ) : ?>
            <tr>
                <td><?= $pesan['nama'] ?></td>
                <td><a class="pesan-masuk" href="<?= BASEURL; ?>/pesan/detilPesan/<?= $pesan['id_pesan'] ?>"><?= $pesan['subjek'] ?></td>
                <td><?= $pesan['tgl_kirim'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/pesan/hapusPesanMasuk/<?= $pesan['id_pesan'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>    
</div>


