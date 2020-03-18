
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/witel/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/witel/ubahData/" method="post">
                <input type="hidden" name="id_witel" value="<?= $data['data_witel']['id_witel'] ?>">
                <label for="id_regional">
                    <span>REGIONAL</span>
                    <select name="id_regional" class="select-field">
                        <option value="<?= $data['data_regional']['id_regional'] ?>"><?= $data['data_regional']['regional'] ?></option>
                        <?php foreach ( $data['data_reg'] as $reg ) : ?>    
                        <option value="<?= $reg['id_regional'] ?>"><?= $reg['regional'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="witel">
                    <span>WITEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="witel" value="<?= $data['data_witel']['witel'] ?>"/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


