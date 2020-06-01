<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pengguna/simpanPass/" method="post">
                <input type="hidden" name="nik" value="<?= $data['data_pengguna']['nik'] ?>"/>
                <label for="pass">
                    <span>PASSWORD LAMA<span class="required">*</span></span>
                    <input type="password" class="input-text" name="pass_lama" value="" required/>
                </label>
                <br>
                <br>
                <label for="pass">
                    <span>PASSWORD BARU<span class="required">*</span></span>
                    <input type="password" class="input-text" name="pass_baru" value="" required/>
                </label>
                <label for="pass">
                    <span>ULANGI PASSWORD BARU<span class="required">*</span></span>
                    <input type="password" class="input-text" name="conf_pass_baru" value="" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /><a href="<?= BASEURL; ?>/Pengguna/detilProfile/<?= $data['data_pengguna']['nik'] ?>">KEMBALI</a></label>
            </form>
        </div>
    </div>
</div>


