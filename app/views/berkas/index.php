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
            <div class="pencarian">
                <select id="optionFilter"" name="optionFilter">
                    <option value="1">DESIGNATOR</option>
                    <option value="2">URAIAN PEKERJAAN</option>
                    <option value="3">SATUAN</option>
                    <option value="4">JJENIS MATERIAL</option>
                    <option value="5">JENIS ALPRO</option>
                    <option value="6">JENIS PEKERJAAN</option>
                </select>
                <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
            </div>
        </div>
        <!-- ini bagian judul -->
        <div class="table-wrapper">
            <table id="myTable" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>JENIS MATERIAL</th>
                    <th>JENIS ALPRO</th>
                    <th>JENIS PEKERJAAN</th>
                    <th width="100px">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $designator['designator'] ?></td>
                    <td><?= $designator['desc'] ?></td>
                    <td><?= $designator['satuan'] ?></td>
                    <td><?= $designator['jenis_material'] ?></td>
                    <td><?= $designator['jenis_alpro'] ?></td>
                    <td><?= $designator['jenis_pekerjaan'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/ListOfMaterial/getUbah/<?= $designator['designator'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/ListOfMaterial/hapus/<?= $designator['designator'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
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
                <a href="<?= BASEURL; ?>/ListOfMaterial/tambahData">Tambah Data</a>
                <select id="optionFilter"" name="optionFilter">
                    <option value="1">DESIGNATOR</option>
                    <option value="2">URAIAN PEKERJAAN</option>
                    <option value="3">SATUAN</option>
                    <option value="4">JJENIS MATERIAL</option>
                    <option value="5">JENIS ALPRO</option>
                    <option value="6">JENIS PEKERJAAN</option>
                </select>
                <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
            </form>     
        </div>
        <!-- ini bagian judul -->
        <div class="table-wrapper">
            <table id="myTable" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>JENIS MATERIAL</th>
                    <th>JENIS ALPRO</th>
                    <th>JENIS PEKERJAAN</th>
                    <th width="100px">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $designator['designator'] ?></td>
                    <td><?= $designator['desc'] ?></td>
                    <td><?= $designator['satuan'] ?></td>
                    <td><?= $designator['jenis_material'] ?></td>
                    <td><?= $designator['jenis_alpro'] ?></td>
                    <td><?= $designator['jenis_pekerjaan'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/ListOfMaterial/getUbah/<?= $designator['designator'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/ListOfMaterial/hapus/<?= $designator['designator'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
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

function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>

