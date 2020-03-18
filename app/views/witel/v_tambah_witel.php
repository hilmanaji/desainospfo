
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/datel/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/witel/tambah/" method="post">
                <label for="id_regional">
                    <span>REGIONAL</span>
                    <select name="id_regional" class="select-field">
                        <?php foreach ( $data['data_regional'] as $reg ) : ?>    
                        <option value="<?= $reg['id_regional'] ?>"><?= $reg['regional'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="witel">
                    <span>WITEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="witel" value=""/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


