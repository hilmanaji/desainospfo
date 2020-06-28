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
            <select id="optionFilter"" name="optionFilter">
                <option value="1">NIK</option>
                <option value="2">Nama Karyawan</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table id="myTable" class="fl-table">
            <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
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
                <td><?= $pengguna['nik'] ?></td>
                <td><?= $pengguna['nama'] ?></td>
                <td><?= $pengguna['jk'] ?></td>
                <td><?= $pengguna['username'] ?></td>
                <td><?= $pengguna['unit'] ?></td>
                <td><?= $pengguna['jabatan'] ?></td>
                <td><?= $pengguna['role_user'] ?></td>
                <td><?= $pengguna['no_hp'] ?></td>
                <td><?= $pengguna['email'] ?></td>
                <td>
                    <a title="Ubah Data" href="<?= BASEURL; ?>/pengguna/getUbah/<?= $pengguna['nik'] ?>/<?= $pengguna['role_user'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a title="Hapus Data" href="<?= BASEURL; ?>/pengguna/hapus/<?= $pengguna['nik'] ?>/<?= $pengguna['role_user'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

<script>
function cari() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    v = parseInt(document.getElementById("optionFilter").value);
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[v];
        if (td) {
            txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }       
  }
}

</script>

