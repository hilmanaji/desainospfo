<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pengguna/ubahData/" method="post">
                <label for="nama">
                    <span>NIK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nik" value="<?= $data['data_pengguna']['nik'] ?>" disable required/>
                </label>
                <label for="nama">
                    <span>NAMA LENGKAP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $data['data_pengguna']['nama'] ?>" required/>
                </label>
                <label for="jk">
                    <span>JENIS KELAMIN</span>
                    <select name="jk" class="select-field">
                        <option value="<?= $data['data_pengguna']['jk'] ?>"><?php if ($data['data_pengguna']['jk'] == "L") { echo "Laki - Laki";} else { echo "Perempuan";} ?></option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="unit">
                    <span>UNIT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="unit" value="<?= $data['data_pengguna']['unit'] ?>" required/>
                </label>
                <label for="jabatan">
                    <span>JABATAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="jabatan" value="<?= $data['data_pengguna']['jabatan'] ?>" required/>
                </label>
                <label for="email">
                    <span>EMAIL<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="<?= $data['data_pengguna']['email'] ?>" required/>
                </label>
                <label for="username">
                    <span>USERNAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="username" value="<?= $data['data_pengguna']['username'] ?>" required/>
                </label>
                <label for="role_user">
                    <span>TIPE USER</span>
                    <select name="role_user" class="select-field">
                        <option value="<?= $data['data_pengguna']['role_user'] ?>"><?= $data['data_pengguna']['role_user'] ?></option>
                        <option value="Pakar">Pakar</option>
                        <option value="Admin">Admin</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                </label>
                <label for="no_hp">
                    <span>NO HANDPHONE<span class="required">*</span></span>
                    <input type="number" class="input-text" name="no_hp" value="<?= $data['data_pengguna']['no_hp'] ?>" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" ><a href="<?= BASEURL; ?>/Pengguna/resetPass/<?= $data['data_pengguna']['nik'] ?>">RESET PASSWORD</a><a href="<?= BASEURL; ?>/Pengguna/index">KEMBALI</a></label>
                
            </form>
        </div>
    </div>
</div>


