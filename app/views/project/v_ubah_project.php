
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/Pengguna/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pengguna/ubahData/" method="post">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_project" value="<?= $data['data_project']['id_project'] ?>" required/>
                </label>
                <label for="nama_desain">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_project" value="<?= $data['data_project']['nama_desain'] ?>" required/>
                </label>
                <label for="jk">
                    <span>JENIS KELAMIN</span>
                    <select name="jk" class="select-field">
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="jk">
                    <span>JENIS KELAMIN</span>
                    <select name="jk" class="select-field">
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="lokasi_project">
                    <span>LOKASI PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="lokasi_project" value="<?= $data['data_project']['lokasi_project'] ?>" required/>
                </label>              
                <label for="witel">
                    <span>WITEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="witel" value="<?= $data['data_project']['witel'] ?>" required/>
                </label>              
                <label for="sto">
                    <span>STO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="sto" value="<?= $data['data_project']['sto'] ?>" required/>
                </label>              
                <label for="odc">
                    <span>ODC<span class="required">*</span></span>
                    <input type="text" class="input-text" name="odc" value="<?= $data['data_project']['odc'] ?>" required/>
                </label>              
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


