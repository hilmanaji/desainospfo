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
        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'terminal')">Material Terminal</button>
        <button class="tablinks" onclick="openTab(event, 'kabel')">Material Kabel</button>
        <button class="tablinks" onclick="openTab(event, 'alur')">Material Alur Kabel</button>
        <button class="tablinks" onclick="openTab(event, 'acc')">Material Accessories</button>
        <button class="tablinks" onclick="openTab(event, 'ringkasan')">Ringkasan</button>
    </div>  
    <div id="terminal" class="tabcontent">
        <p>tes 1</p>
    </div>
    <div id="kabel" class="tabcontent">
        <p>Tes 2</p>
    </div>
    <div id="alur" class="tabcontent">
        <p>Tes 2</p>
    </div>
    <div id="acc" class="tabcontent">
        <p>Tes 2</p>
    </div>
    <div id="ringkasan" class="tabcontent">
        <p>Tes 2</p>
    </div>

    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>SEGEMEN</th>
                <th>DESIGNATOR</th>
                <th>URAIAN PEKERJAAN</th>
                <th>SATUAN</th>
                <th>VOLUME</th>
                <th>UPDATE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_design'] as $design ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $design['segment'] ?></td>
                <td><?= $design['designator'] ?></td>
                <td><?= $design['desc'] ?></td>
                <td><?= $design['satuan'] ?></td>
                <td><?= $design['volume'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/DesainOSP/ubahProgres/<?= $design['id_design'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/DesainOSP/hapusProgres/<?= $design['id_design'] ?>/<?= $design['id_design'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
            <tbody>
                <form action="<?= BASEURL; ?>/DesainOSP/tambahMaterial/" method="post" enctype="multipart/form-data">
                <td>
                    <div class="gaya-form">
                    </div> 
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="id_kegiatan">
                            <select style="width: 130%" name="id_kegiatan" class="select-field">
                                <?php foreach ( $data['data_status'] as $sts ) : ?>    
                                <option value="<?= $sts['id_kegiatan'] ?>"><?= $sts['kegiatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>" >
                    </div> 
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_mulai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_mulai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_selesai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_selesai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_selesai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_selesai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                    <label for="tgl_selesai">
                            <input style="width: 100%" type="number" class="input-text" name="tgl_selesai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    
                    <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="19" heigth="19"/>  
                                 
                </td>
                </form>
            </tbody>
        </table>
    </div>
    <!-- End table Warper -->
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

