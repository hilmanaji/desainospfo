<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><a href="<?= BASEURL; ?>/Berkas/getDetil/<?= $data['data_berkas']['id_berkas'] ?>"><?= $data['data_berkas']['judul'] ?></a></h4>
</div>
<div class="data-table">
    
    <embed src="/desainospfo/app/berkas/<?= $data['data_berkas']['nama_berkas'] ?>.pdf" type="application/pdf" width="100%" height=650px" />
    
</div>