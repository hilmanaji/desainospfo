<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="tab">
        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'List')">List Modul Pengetahuan</button>
        <button class="tablinks" onclick="openTab(event, 'Listku')">Tambah Modul Pengetahuan</button>
    </div>

    <div id="List" class="tabcontent">
        <div class="navigasi">
            <?php Flasher::flash(); ?>
            <div class="pencarian">
                <select id="optionFilter"" name="optionFilter">
                    <option value="1">Judul Pengetahuan</option>
                    <option value="2">Stream</option>
                    <option value="3">Deskripsi</option>
                </select>
                <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
            </div>
        </div>
        <!-- ini bagian judul -->
        <div class="table-wrapper">
            <table id="myTable" class="table-designator">
                <thead>
                <tr>
                    <th width="50px">NO</th>
                    <th>Judul Pengetahuan</th>
                    <th>Stream</th>
                    <th>Deskripsi</th>
                    <th>&Sigma; Dilihat</th>
                    <th width="120px">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_berkas'] as $berkas ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $berkas['judul'] ?></td>
                    <td><?= $berkas['stream'] ?></td>
                    <td><?= $berkas['deskripsi'] ?></td>
                    <td><?= $berkas['dilihat'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/Berkas/getDetil/<?= $berkas['id_berkas'] ?>"><img src="<?= BASEURL; ?>/img/lihat.png" alt=""  width="25" heigth="25"></a>
                        <?php
                        if ($_SESSION["role_user"] == 'Admin') { ?>
                        <a title="Hapus Data" href="<?= BASEURL; ?>/Berkas/hapusBerkas/<?= $berkas['id_berkas'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                        <?php }
                        else { ?>

                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
        </div>
    </div>

    <div id="Listku" class="tabcontent">
        <div class="navigasi">
            <?php Flasher::flash(); ?>
            <form action="">
                <a href="<?= BASEURL; ?>/Berkas/tambahData">Tambah Data</a>
                <select id="optionFilter"" name="optionFilter">
                    <option value="1">Judul Pengetahuan</option>
                    <option value="2">Stream</option>
                    <option value="3">Deskripsi</option>
                    <option value="4">Status</option>
                </select>
                <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
            </form>     
        </div>
        <!-- ini bagian judul -->
        <div class="table-wrapper">
            <table id="myTable" class="table-designator">
                <thead>
                <tr>
                    <th width="50px">NO</th>
                    <th>Judul Pengetahuan</th>
                    <th>Stream</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th width="100px">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_berkasku'] as $berkas ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $berkas['judul'] ?></td>
                    <td><?= $berkas['stream'] ?></td>
                    <td><?= $berkas['deskripsi'] ?></td>
                    <td><?= $berkas['status'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/Berkas/getDetil/<?= $berkas['id_berkas'] ?>"><img src="<?= BASEURL; ?>/img/lihat.png" alt=""  width="25" heigth="25"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
        </div>
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

function openTab(evt, namaTab) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(namaTab).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>

