
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/pengguna/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pengguna/simpan/" method="post">
                <label for="nik">
                    <span>NIK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nik" value="" required/>
                </label>
                <label for="nama">
                    <span>NAMA LENGKAP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="" required/>
                </label>
                <label for="jk">
                    <span>JENIS KELAMIN</span>
                    <select name="jk" class="select-field">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="email">
                    <span>EMAIL<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="" required/>
                </label>
                <label for="username">
                    <span>USERNAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="username" value="" required/>
                </label>
                <label for="pass">
                    <span>PASSWORD<span class="required">*</span></span>
                    <input type="password" class="input-text" name="pass" value="" required/>
                </label>
                <label for="unit">
                    <span>UNIT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="unit" value="" required/>
                </label>
                <label for="jabatan">
                    <span>JABATAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jabatan" value="" required/>
                </label>
                <label for="role_user">
                    <span>TIPE USER</span>
                    <select name="role_user" class="select-field">
                        <option value="Admin">Admin</option>
                        <option value="Pakar">Pakar</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                </label>
                <label for="no_hp">
                    <span>NO HANDPHONE<span class="required">*</span></span>
                    <input type="number" class="input-text" name="no_hp" value="" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


