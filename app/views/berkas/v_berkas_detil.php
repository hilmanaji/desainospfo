<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
<div class="gaya-form">
    <div class="navigasi">
            <label for="judul">
                <span>JUDUL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="judul" value="<?= $data['data_berkas']['judul'] ?>" disabled/>
                </label>
                <label for="stream">
                    <span>STREAM<span class="required">*</span></span>
                    <input type="text" class="input-text" name="stream" value="<?= $data['data_berkas']['stream'] ?>" disabled/>
                </label>
                <label for="deskripsi">
                    <span>DESKRIPSI<span class="required">*</span></span>
                    <input type="text" class="input-text" name="deskripsi" value="<?= $data['data_berkas']['deskripsi'] ?>" disabled/>
                </label>
                <label for="nik_pengirim">
                    <span>PENGIRIM<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nik_pengirim" value="<?= $data['data_berkas']['nik_pengirim'] ?>" disabled/>
                </label>
                <label for="status">
                    <span>STATUS<span class="required">*</span></span>
                    <input type="text" class="input-text" name="status" value="<?= $data['data_berkas']['status'] ?>" disabled/>
                </label>
                <label>
                    <span>FILE<span class="required">*</span></span>
                    <a href="<?= BASEURL; ?>/Berkas/getBerkas/<?= $data['data_berkas']['id_berkas'] ?>"><?= $data['data_berkas']['nama_berkas'] ?>.PDF</a>
                </label>
    </div>
 
</div>