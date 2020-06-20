
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/project/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
    <?php Flasher::flash(); ?>
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Project/simpan/" method="post">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_project" value="" required/>
                </label>
                <label for="nama_desain">
                    <span>NAMA PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_desain" value="" required/>
                </label>
                <label for="jenis_fttx">
                    <span>JENIS FTTX</span>
                    <select name="jenis_fttx" class="select-field">
                        <option value="FTTH">Fiber To The Home</option>
                        <option value="FTTB">Fiber To The Bulding</option>
                        <option value="FTTM">Fiber To The Mobile</option>
                        <option value="FTTA">Fiber To The Area</option>
                    </select>
                </label>
                <label for="jenis_project">
                    <span>JENIS TEMATIK</span>
                    <select name="jenis_project" class="select-field">
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
                    <input type="text" class="input-text" name="lokasi_project" value="" required/>
                </label>
                <label for="witel">
                    <span>WITEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="witel" value="" required/>
                </label>
                <label for="sto">
                    <span>STO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="sto" value="" required/>
                </label>
                <label for="odc">
                    <span>ODC<span class="required">*</span></span>
                    <input type="text" class="input-text" name="odc" value="" required/>
                </label>
                <input type="hidden"  name="status" value="BUTUH VALIDASI" />
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


