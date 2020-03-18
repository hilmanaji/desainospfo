<div class="judul">
    <h4>Teritori / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <a href="<?= BASEURL; ?>/witel/tambahData">Tambah Data</a>
        
            <input type="text" placeholder="Cari data" name="cari">
            <input type="submit" value="Cari" class="tombol">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>WITEL</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_witel'] as $reg ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $reg['witel'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/witel/getUbah/<?= $reg['id_witel'] ?>/<?= $reg['id_regional'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/witel/hapus/<?= $reg['id_witel'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

