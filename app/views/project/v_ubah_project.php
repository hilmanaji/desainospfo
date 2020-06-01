
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/Pengguna/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Project/ubahData/" method="post">
                
                    <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>"/>
                
                <label for="nama_desain">
                    <span>NAMA PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_desain" value="<?= $data['data_project']['nama_desain'] ?>" required/>
                </label>
                <label for="jenis_fttx">
                    <span>JENIS FTTx</span>
                    <select name="jenis_fttx" class="select-field">
                        <option value="<?= $data['data_project']['jenis_fttx'] ?>"><?= $data['data_project']['jenis_fttx'] ?></option>
                        <option value="FTTH">Fiber To The Home</option>
                        <option value="FTTB">Fiber To The Bulding</option>
                        <option value="FTTM">Fiber To The Mobile</option>
                        <option value="FTTA">Fiber To The Area</option>
                    </select>
                </label>
                <label for="jenis_project">
                    <span>JENIS TEMATIK</span>
                    <select name="jenis_project" class="select-field">
                        <option value="<?= $data['data_project']['jenis_project'] ?>"><?= $data['data_project']['jenis_project'] ?></option>
                        <option value="STTF">STTF</option>
                        <option value="NODE-B">NODE-B</option>
                        <option value="HEM">HEM</option>
                        <option value="PT 3">PT 3</option>
                        <option value="PT 2">PT 2</option>
                        <option value="T-CLOUD">T-CLOUD</option>
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


