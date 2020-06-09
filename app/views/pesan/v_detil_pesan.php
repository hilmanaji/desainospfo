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
                <input type="hidden" class="" name="nik_pengirim" value="<?= $_SESSION['nik'] ?>" required/>
                <label for="">
                    <span>Dari</span>
                    :&nbsp;<?= $data['data_pesan']['nama'] ?>
                </label>
                <label for="">
                    <span>Tanggal<span class="required">*</span></span>
                    :&nbsp;<?= $data['data_pesan']['tgl_kirim'] ?>
                </label>
                <label for="">
                    <span>Subjek<span class="required">*</span></span>
                    :&nbsp;<?= $data['data_pesan']['subjek'] ?>
                </label>
                <label for="">
                    <span>Pesan<span class="required">*</span></span>
                    :&nbsp;<?= $data['data_pesan']['pesan'] ?>
                </label>
                <div class="navigasi">               
                <label><a href="<?= BASEURL;?>/Pesan/buatPesan/<?= $data['data_pesan']['nik_pengirim'] ?>/<?= $data['data_pesan']['nama'] ?>">BALAS</a></label>
                </div>
            </form>
        </div>
    </div>    
</div>


