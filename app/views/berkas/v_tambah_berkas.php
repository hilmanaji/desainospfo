
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/berkas/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Berkas/tambahBerkas/" method="post" enctype="multipart/form-data">
                <label for="judul">
                    <span>JUDUL PENGETAHUAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="judul" value="" required/>
                </label>
                <label for="nama_berkas">
                    <span>NAMA BERKAS<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_berkas" value="" required/>
                </label>
                <label for="stream">
                    <span>STREAM<span class="required">*</span></span>
                    <input type="text" class="input-text" name="stream" value="" required/>
                </label>
                <label for="deskripsi">
                    <span>DESKRIPSI<span class="required">*</span></span>
                    <input type="text" class="input-text" name="deskripsi" value="" required/>
                </label>
                <input type="hidden" name="nik_pengirim" value="<?= $_SESSION['nik'] ?>"/>
                <label for="evidence">
                    <span>BERKAS PENGETAHUAN<span class="required">*</span></span>
                    <input type="file" style="width: 60%" class="input-text" name="evidence" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


