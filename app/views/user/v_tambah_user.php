
<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/user/tambah/" method="post">
                <label for="id_mitra">
                    <span>PERUSAHAAN</span>
                    <select name="id_mitra" class="select-field">
                        <?php foreach ( $data['data_mitra'] as $mitra ) : ?>    
                        <option value="<?= $mitra['id_mitra'] ?>"><?= $mitra['nama_perusahaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="nama">
                    <span>NAMA LENGKAP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="" required/>
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
                <label for="role_user">
                    <span>TIPE USER</span>
                    <select name="role_user" class="select-field">
                        <option value="Procurement">Procurement</option>
                        <option value="Admin Project">Admin Project</option>
                        <option value="Manajer Konstruksi">Manajer Konstruksi</option>
                        <option value="Admin Mitra">Admin Mitra</option>
                        <option value="Direktur Mitra">Direktur Mitra</option>
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


