<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="menuPesan">
        <div class="sidebar">
            <a class="compose" href="">Buat Pesan</a>
            <br><br>
            <a href="<?= BASEURL;?>/Pesan/index/<?= $_SESSION['nik'] ?>">Kotak Masuk</a>
            <a href="<?= BASEURL;?>/Pesan/pesanTerkirim/<?= $_SESSION['nik'] ?>">Pesan Terkirim</a>
        </div>
    </div>

    <div class="mainPesan">
        <div class="gaya-form">
            <form action="#" method="">
                <label for="pengirim">
                    <span>Dari</span>
                    <span><?= $data['data_pesan']['nama'] ?></span><br>
                </label>
                <label for="tanggal">
                    <span>Tanggl</span>
                    <span><?= $data['data_pesan']['tgl_kirim'] ?></span>
                </label>
                <label for="subjek">
                    <span>Subjek</span>
                    <span><?= $data['data_pesan']['subjek'] ?></span><br>
                </label>
                <label for="pesan">
                    <span>Pesan<span class="required">*</span></span>
                    <span><?= $data['data_pesan']['pesan'] ?><span class="required">*</span></span><br>
                </label>
                
                
                <label><span> </span><input type="submit" value="BALAS" /></label>
            </form>
        </div>
    </div>    
</div>


