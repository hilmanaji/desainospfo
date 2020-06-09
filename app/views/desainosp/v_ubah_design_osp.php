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
        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'feeder')">Ubah Volume</button>
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
                <tr>
                    <form action="<?= BASEURL; ?>/DesainOSP/simpanVolume/" method="POST">
                    <td><?= $no++; ?></td>
                    <input type="hidden" name="id_design" value="<?= $data['data_design']['id_design'] ?>">
                    <input type="hidden" name="id_project" value="<?= $data['data_design']['id_project'] ?>">
                    <input type="hidden" name="segment" value="<?= $data['data_design']['segment'] ?>">
                    <td><?= $data['data_design']['jenis_material'] ?></td>
                    <td><input type="hidden" name="designator" value="<?= $data['data_design']['designator'] ?>"><?= $data['data_design']['designator'] ?></td>
                    <td><?= $data['data_design']['deskripsi'] ?></td>
                    <td><?= $data['data_design']['satuan'] ?></td>
                    <td><input type="number" class="selectDesignator" name="volume" value="<?= $data['data_design']['volume'] ?>"></td>
                    <td>
                        <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/b-simpan.png" width="18" heigth="18"/>
                    </td>
                    </form>
                </tr>
                <tbody>
            </table>
        </div>
        <!-- End table Warper -->
    </div>
    

</div>

<script>
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



