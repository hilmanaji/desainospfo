<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="menuPesan">
        <div class="sidebar">
            <a class="compose" href="">Buat Pesan</a>
            <br><br>
            <a href="<?= BASEURL;?>/Pesan/index/<?= $_SESSION['nik'] ?>">Kotak Masuk</a>
            <a href="<?= BASEURL;?>/Pesan/pesanTerkirim/<?= $_SESSION['nik'] ?>">Pesan Terkirim</a>
        </div>
    </div>

    <div class="mainPesan">
        <div class="navigasi">
            <?php Flasher::flashPesan(); ?>   
        </div>
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pesan/kirimPesan/" method="post">
                <input type="hidden" class="" name="nik_pengirim" value="<?= $_SESSION['nik'] ?>" required/>
                <label for="nik_penerima">
                    <span>Kepada</span>
                    <select name="nik_penerima" class="select-field">
                        <option value="<?= $data['nik_penerima'] ?>"><?= $data['nama_penerima'] ?></option>
                        <?php foreach ( $data['data_pengguna'] as $pengguna ) : ?>    
                            <option value="<?= $pengguna['nik'] ?>"><?= $pengguna['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="subjek">
                    <span>Subjek<span class="required">*</span></span>
                    <input type="text" class="input-text" name="subjek" value="" required/>
                </label>
                <label for="pesan">
                    <span>Pesan<span class="required">*</span></span>
                    <textarea name="pesan" class="textarea-field" style="width: 70%" required></textarea>
                </label>
                <input type="hidden" class="" name="status_pengirim" value="1" required/>
                <input type="hidden" class="" name="status_penerima" value="1" required/>
                
                <label><span> </span><input type="submit" value="KIRIM" /></label>
            </form>
        </div>
    </div>    
</div>


