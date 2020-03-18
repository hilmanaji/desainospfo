
<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/user/ubahDataProfile/" method="post">
                <input type="hidden" class="input-text" name="id_user" value="<?= $data['data_user']['id_user'] ?>"/>
                <input type="hidden" class="input-text" name="id_mitra" value="<?= $data['data_user']['id_mitra'] ?>" required/>
                <label for="nama">
                    <span>NAMA LENGKAP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $data['data_user']['nama'] ?>" required/>
                </label>
                <label for="jk">
                    <span>JENIS KELAMIN</span>
                    <select name="jk" class="select-field">
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="email">
                    <span>EMAIL<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="<?= $data['data_user']['email'] ?>" required/>
                </label>
                <label for="username">
                    <span>USERNAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="username" value="<?= $data['data_user']['username'] ?>" required/>
                </label>
                <label for="pass">
                    <span>PASSWORD<span class="required">*</span></span>
                    <input type="password" class="input-text" name="pass" value="<?= $data['data_user']['password'] ?>" required/>
                </label>
                <input type="hidden" class="input-text" name="role_user" value="<?= $data['data_user']['role_user'] ?>" required/>
                <label for="no_hp">
                    <span>NO HANDPHONE<span class="required">*</span></span>
                    <input type="number" class="input-text" name="no_hp" value="<?= $data['data_user']['no_hp'] ?>" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


