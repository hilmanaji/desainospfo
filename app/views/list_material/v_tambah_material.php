
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/project/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/ListOfMaterial/tambah/" method="post">
                <label for="designator">
                    <span>DESIGNATOR<span class="required">*</span></span>
                    <input type="text" class="input-text" name="designator" value="" required/>
                </label>
                <label for="desc">
                    <span>URAIAN PEKERJAAN<span class="required">*</span></span>
                    <textarea name="desc" class="textarea-field" style="width: 60%" required></textarea>
                </label>
                <label for="satuan">
                    <span>LOKASI PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="" required/>
                </label>
                <label for="jenis_material">
                    <span>JENIS MATERIAL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_material" value="" required/>
                </label>
                <label for="jenis_alpro">
                    <span>JENIS ALPRO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_alpro" value="" required/>
                </label>
                <label for="jenis_pekerjaan">
                    <span>JENIS PEKERJAAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_pekerjaan" value="" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


