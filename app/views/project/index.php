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
            <a href="<?= BASEURL; ?>/Project/tambahData">Tambah Data</a>
            <select id="optionFilter"" name="optionFilter">
                <option value="1">ID PROJECT</option>
                <option value="2">NAMA DESAIN</option>
                <option value="3">JENIS FTTx</option>
                <option value="4">JENIS PROJECT</option>
                <option value="5">LOKASI PROJECT</option>
                <option value="6">WITEL</option>
                <option value="7">STO</option>
                <option value="8">ODC</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
        </form> 
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table id="myTable" class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>ID PROJECT</th>
                <th>NAMA DESAIN</th>
                <th>JENIS FTTx</th>
                <th>JENIS PROJECT</th>
                <th>LOKASI PROJECT</th>
                <th>WITEL</th>
                <th>STO</th>
                <th>ODC</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_project'] as $project ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $project['id_project'] ?></td>
                <td><?= $project['nama_desain'] ?></td>
                <td><?= $project['jenis_fttx'] ?></td>
                <td><?= $project['jenis_project'] ?></td>
                <td><?= $project['lokasi_project'] ?></td>
                <td><?= $project['witel'] ?></td>
                <td><?= $project['sto'] ?></td>
                <td><?= $project['odc'] ?></td>
                <td><?= $project['status'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/project/getUbah/<?= $project['id_project'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/project/hapus/<?= $project['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
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

