
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/ListOfMaterial/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/ListOfMaterial/ubahData/" method="post">
                <input type="hidden" name="id_lom" value="<?= $data['data_lom']['id_lom'] ?>" >
                <label for="designator">
                    <span>DESIGNATOR<span class="required">*</span></span>
                    <input type="text" class="input-text" name="designator" value="<?= $data['data_lom']['designator'] ?>" required/>
                </label>
                <label for="desc">
                    <span>URAIAN PEKERJAAN<span class="required">*</span></span>
                    <textarea name="deskripsi" class="textarea-field" style="width: 60%"  required><?= $data['data_lom']['deskripsi'] ?></textarea>
                </label>
                <label for="satuan">
                    <span>LOKASI PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="<?= $data['data_lom']['satuan'] ?>" required/>
                </label>
                <label for="jenis_material">
                    <span>JENIS MATERIAL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_material" value="<?= $data['data_lom']['jenis_material'] ?>" required/>
                </label>
                <label for="jenis_alpro">
                    <span>JENIS ALPRO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_alpro" value="<?= $data['data_lom']['jenis_alpro'] ?>" required/>
                </label>
                <label for="jenis_pekerjaan">
                    <span>JENIS PEKERJAAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jenis_pekerjaan" value="<?= $data['data_lom']['jenis_pekerjaan'] ?>" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


