<div class="judul">
    <h4>Desain / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
    </div>
    <!-- ini bagian judul -->
    <div class="gaya-form">
        <div class="grid-project">
            <div class="grid-form">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="id_project" value="<?= $data['data_project']['id_project'] ?>" disabled/>
                </label>
                <label for="nama_desain">
                    <span>NAMA DESAIN<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="nama_desain" value="<?= $data['data_project']['nama_desain'] ?>" disabled/>
                </label>
                <label for="jenis_project">
                    <span>JENIS PROJECT</span>
                    <input style="width: 40%" type="text" class="input-text" name="jenis_project" value="<?= $data['data_project']['jenis_project'] ?>" disabled/>
                </label>
                <label for="lokasi_project">
                    <span>LOKASI PROJECT</span>
                    <input style="width: 40%" type="text" class="input-text" name="lokasi_project" value="<?= $data['data_project']['lokasi_project'] ?>" disabled/>
                </label>
            </div>
            <div class="grid-form">
                <label for="jenis_fttx">
                    <span>JENIS FTTx<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="jenis_fttx" value="<?= $data['data_project']['jenis_fttx'] ?>" disabled/>
                </label>
                <label for="witel">
                    <span>WITEL<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="witel" value="<?= $data['data_project']['witel'] ?>" disabled/>
                </label>
                <label for="sto">
                    <span>STO<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="sto" value="<?= $data['data_project']['sto'] ?>" disabled/>
                </label>
                <label for="odc">
                    <span>ODC<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="odc" value="<?= $data['data_project']['odc'] ?>" disabled/>
                </label>
            </div>
        </div>
    </div>
    <div class="tab">
        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'feeder')">Segment Feeder</button>
        <button class="tablinks" onclick="openTab(event, 'distribusi')">Segment Distribusi</button>
        <button class="tablinks" onclick="openTab(event, 'dc')">Segment Drop Cable</button>
        <button class="tablinks" onclick="openTab(event, 'ikr')">Segment IKR & IKG</button>
        <button class="tablinks" onclick="openTab(event, 'ringkasan')">Ringkasan</button>
    </div>  
    <div id="feeder" class="tabcontent">
        <div class="table-wrapper">
            <table id="myTable2" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th width="180px">JENIS MATERIAL</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th width="100px">UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_feeder'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['jenis_material'] ?></td>
                    <td><?= $design['designator'] ?></td>
                    <td><?= $design['deskripsi'] ?></td>
                    <td><?= $design['satuan'] ?></td>
                    <td><?= $design['volume'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/DesainOSP/hapusMaterial/<?= $design['id_design'] ?>/<?= $data['data_project']['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
                <tbody>
                        <div class="table-wrapper">
                            <table id="myTable" class="table-designator">
                                    <div class="navigasi">
                                        <?php Flasher::flash(); ?>
                                            <select id="optionFilter"" name="optionFilter">
                                                <option value="2">DESIGNATOR</option>
                                                <option value="3">URAIAN PEKERJAAN</option>
                                                <option value="4">SATUAN</option>
                                                <option value="5">JENIS MATERIAL</option>
                                            </select>
                                            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
                                    </div>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="180px"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th width="100px"></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <?php
                                $no = 1; ?>
                                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                                <form action="<?= BASEURL; ?>/DesainOSP/tambahMaterial/" method="post" enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>"/>
                                    <input type="hidden" name="segment" value="FEEDER"/>
                                    <td><?= $no++; ?></td>
                                    <td><?= $designator['jenis_material'] ?></td>
                                    <td><input type="hidden" name="designator" value="<?= $designator['designator'] ?>"><?= $designator['designator'] ?></td>
                                    <td><?= $designator['deskripsi'] ?></td>
                                    <td><?= $designator['satuan'] ?></td>
                                    <td><input type="number" class="selectDesignator" name="volume" placeholder="Volume" title="Masukan Volume Material atau jasa"></td>
                                    <td>
                                        <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="15" heigth="15"/>           
                                    </td>
                                </tr>
                                </form>
                                <?php endforeach; ?>
                                <tbody>
                            </table>
                        </div>
                </tbody>
            </table>
        </div>
        <!-- End table Warper -->
    </div>
    <div id="distribusi" class="tabcontent">
        <div class="table-wrapper">
            <table id="myTable2" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th width="180px">JENIS MATERIAL</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th width="100px">UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_distribusi'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['jenis_material'] ?></td>
                    <td><?= $design['designator'] ?></td>
                    <td><?= $design['deskripsi'] ?></td>
                    <td><?= $design['satuan'] ?></td>
                    <td><?= $design['volume'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/DesainOSP/hapusMaterial/<?= $design['id_design'] ?>/<?= $data['data_project']['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
                <tbody>
                        <div class="table-wrapper">
                            <table id="tblDistribusi" class="table-designator">
                                    <div class="navigasi">
                                        <?php Flasher::flash(); ?>
                                            <select id="optionFilter"" name="optionFilter">
                                                <option value="2">DESIGNATOR</option>
                                                <option value="3">URAIAN PEKERJAAN</option>
                                                <option value="4">SATUAN</option>
                                                <option value="5">JENIS MATERIAL</option>
                                            </select>
                                            <input type="text" id="myInput" onkeyup="caritblDistribusi()" placeholder="Masukan Pencarian" title="Ketik disini">
                                    </div>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="180px"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th width="100px"></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <?php
                                $no = 1; ?>
                                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                                <form action="<?= BASEURL; ?>/DesainOSP/tambahMaterial/" method="post" enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>"/>
                                    <input type="hidden" name="segment" value="DISTRIBUSI"/>
                                    <td><?= $no++; ?></td>
                                    <td><?= $designator['jenis_material'] ?></td>
                                    <td><input type="hidden" name="designator" value="<?= $designator['designator'] ?>"><?= $designator['designator'] ?></td>
                                    <td><?= $designator['deskripsi'] ?></td>
                                    <td><?= $designator['satuan'] ?></td>
                                    <td><input type="number" class="selectDesignator" name="volume" placeholder="Volume" title="Masukan Volume Material atau jasa"></td>
                                    <td>
                                        <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="15" heigth="15"/>           
                                    </td>
                                </tr>
                                </form>
                                <?php endforeach; ?>
                                <tbody>
                            </table>
                        </div>
                </tbody>
            </table>
        </div>
    <!-- End table Warper -->
    </div>
    <div id="dc" class="tabcontent">
        <div class="table-wrapper">
            <table id="myTable2" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th width="180px">JENIS MATERIAL</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th width="100px">UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_dropcore'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['jenis_material'] ?></td>
                    <td><?= $design['designator'] ?></td>
                    <td><?= $design['deskripsi'] ?></td>
                    <td><?= $design['satuan'] ?></td>
                    <td><?= $design['volume'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/DesainOSP/hapusMaterial/<?= $design['id_design'] ?>/<?= $data['data_project']['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
                <tbody>
                        <div class="table-wrapper">
                            <table id="myTable" class="table-designator">
                                    <div class="navigasi">
                                        <?php Flasher::flash(); ?>
                                            <select id="optionFilter"" name="optionFilter">
                                                <option value="2">DESIGNATOR</option>
                                                <option value="3">URAIAN PEKERJAAN</option>
                                                <option value="4">SATUAN</option>
                                                <option value="5">JENIS MATERIAL</option>
                                            </select>
                                            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
                                    </div>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="180px"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th width="100px"></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <?php
                                $no = 1; ?>
                                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                                <form action="<?= BASEURL; ?>/DesainOSP/tambahMaterial/" method="post" enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>"/>
                                    <input type="hidden" name="segment" value="DROP CABLE"/>
                                    <td><?= $no++; ?></td>
                                    <td><?= $designator['jenis_material'] ?></td>
                                    <td><input type="hidden" name="designator" value="<?= $designator['designator'] ?>"><?= $designator['designator'] ?></td>
                                    <td><?= $designator['deskripsi'] ?></td>
                                    <td><?= $designator['satuan'] ?></td>
                                    <td><input type="number" class="selectDesignator" name="volume" placeholder="Volume" title="Masukan Volume Material atau jasa"></td>
                                    <td>
                                        <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="15" heigth="15"/>           
                                    </td>
                                </tr>
                                </form>
                                <?php endforeach; ?>
                                <tbody>
                            </table>
                        </div>
                </tbody>
            </table>
        </div>
    </div>
    <div id="ikr" class="tabcontent">
        <div class="table-wrapper">
            <table id="myTable2" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th width="180px">JENIS MATERIAL</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th width="100px">UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_ikr'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['jenis_material'] ?></td>
                    <td><?= $design['designator'] ?></td>
                    <td><?= $design['deskripsi'] ?></td>
                    <td><?= $design['satuan'] ?></td>
                    <td><?= $design['volume'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/DesainOSP/hapusMaterial/<?= $design['id_design'] ?>/<?= $data['data_project']['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>
                <tbody>
                        <div class="table-wrapper">
                            <table id="myTable" class="table-designator">
                                    <div class="navigasi">
                                        <?php Flasher::flash(); ?>
                                            <select id="optionFilter"" name="optionFilter">
                                                <option value="2">DESIGNATOR</option>
                                                <option value="3">URAIAN PEKERJAAN</option>
                                                <option value="4">SATUAN</option>
                                                <option value="5">JENIS MATERIAL</option>
                                            </select>
                                            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
                                    </div>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="180px"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th width="100px"></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <?php
                                $no = 1; ?>
                                <?php foreach ( $data['data_lom'] as $designator ) : ?>
                                <form action="<?= BASEURL; ?>/DesainOSP/tambahMaterial/" method="post" enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>"/>
                                    <input type="hidden" name="segment" value="IKR & IKG"/>
                                    <td><?= $no++; ?></td>
                                    <td><?= $designator['jenis_material'] ?></td>
                                    <td><input type="hidden" name="designator" value="<?= $designator['designator'] ?>"><?= $designator['designator'] ?></td>
                                    <td><?= $designator['deskripsi'] ?></td>
                                    <td><?= $designator['satuan'] ?></td>
                                    <td><input type="number" class="selectDesignator" name="volume" placeholder="Volume" title="Masukan Volume Material atau jasa"></td>
                                    <td>
                                        <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="15" heigth="15"/>           
                                    </td>
                                </tr>
                                </form>
                                <?php endforeach; ?>
                                <tbody>
                            </table>
                        </div>
                </tbody>
            </table>
        </div>
    </div>
    <div id="ringkasan" class="tabcontent">
        <div class="table-wrapper">
            <table id="myTable2" class="table-designator">
                <thead>
                <tr>
                    <th>NO</th>
                    <th width="180px">JENIS MATERIAL</th>
                    <th>DESIGNATOR</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th width="100px">UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ( $data['data_design'] as $design ) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $design['jenis_material'] ?></td>
                    <td><?= $design['designator'] ?></td>
                    <td><?= $design['deskripsi'] ?></td>
                    <td><?= $design['satuan'] ?></td>
                    <td><?= $design['volume'] ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/DesainOSP/hapusMaterial/<?= $design['id_design'] ?>/<?= $data['data_project']['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    </td>
                </tr>
                <?php endforeach; ?>                     
                </tbody>
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

function caritblDistribusi() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tblDistribusi");
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

