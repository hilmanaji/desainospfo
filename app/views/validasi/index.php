<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="tab">
        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'List')">List Modul Belum Validasi</button>
        <button class="tablinks" onclick="openTab(event, 'Listku')">List Design Belum Validasi</button>
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
                    <th>Status</th>
                    <th width="100px">ACTION</th>
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
                    <td><?= $berkas['status'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/Berkas/getDetil/<?= $berkas['id_berkas'] ?>">LIHAT</a>
                        <a href="<?= BASEURL; ?>/Validasi/approveBerkas/<?= $berkas['id_berkas'] ?>" onClick="return confirm('Anda Yakin Akan Menyetujui untuk dirilis ?')">APPROVE</a>
                        <a href="<?= BASEURL; ?>/Validasi/rejectBerkas/<?= $berkas['id_berkas'] ?>">REJECT</a>
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
                    <th>NO</th>
                    <th>ID Project</th>
                    <th>Nama Design</th>
                    <th>Jenis FTTx</th>
                    <th>Jenis Project</th>
                    <th>Lokasi Project</th>
                    <th>Witel</th>
                    <th>STO</th>
                    <th>ODC</th>
                    <th>Status</th>
                    <th width="100px">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_design'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['id_project'] ?></td>
                    <td><?= $design['nama_desain'] ?></td>
                    <td><?= $design['jenis_fttx'] ?></td>
                    <td><?= $design['jenis_project'] ?></td>
                    <td><?= $design['lokasi_project'] ?></td>
                    <td><?= $design['witel'] ?></td>
                    <td><?= $design['sto'] ?></td>
                    <td><?= $design['odc'] ?></td>
                    <td><?= $design['status'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/Validasi/lihatDesign/<?= $design['id_project'] ?>">LIHAT</a>
                        <a href="<?= BASEURL; ?>/Validasi/approveDesign/<?= $design['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menyetujui untuk dirilis ?')">APPROVE</a>
                        <a href="<?= BASEURL; ?>/Validasi/rejectDesign/<?= $design['id_project'] ?>">REJECT</a>
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

