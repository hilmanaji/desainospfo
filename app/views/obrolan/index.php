<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
    <div class="navigasi">
            <?php Flasher::flashPesan(); ?>   
    </div>
</div>
<div class="data-table">
    <div class="menuPesan">
        <div class="sidebar">
            <input type="text" id="cariObrolan" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
            <?php foreach ( $data['data_obrolan'] as $obrolan ) : ?>
            <a class="penerimaObrolan" href="<?= BASEURL;?>/Obrolan/mulaiObrolan/"><?= $obrolan['nik_pengirim'] ?></a>
            <?php endforeach; ?>
            
            <a class="compose" href="<?= BASEURL;?>/Pesan/buatPesan">Buat Pesan</a>
            <br><br>
            <a class="active" href="">Kotak Masuk</a>
            <a href="<?= BASEURL;?>/Pesan/pesanTerkirim/<?= $_SESSION['nik'] ?>">Pesan Terkirim</a>
        </div>
    </div>

    <div class="mainPesan">
        <div class="head-chat">
            <input type="text" name="nama" id="nama" value="<?= $obrolan['penerima']['nik_penerima'] ?>">
        </div>
        <div id="div_chat">

        </div>
        <form onSubmit="return blockSubmit();">
            <label for="pesan">Pesan :</label>
            <input type="text" name="pesan" id="inputObrolan" size="50">
            <input type="button" value="KIRIM" onclick="blockSubmit()">
        </form>
    </div>    
</div>


<script>

var ajaxku = buatAjax();
var tnama = 0;
var pesanakhir = 0;
var timer;

function taruhNama() {
    if(tnama==0){
        document.getElementById("nama").disabled = "true";
        tnama = 1;
    }else {
        document.getElementById("nama").disabled = "";  
    }
    ambilPesan();
}

function buatAjax() {
    if(window.XMLHttpRequest){
        return new XMLHttpRequest();
    }else if(window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function ambilPesan() {
    namaku = document.getElementById("nama").value
    if(ajaxku.readyState == 4 || ajaxku.readyState == 0) {
    ajaxku.open("GET", "ambilchat.php?akhir="+pesanakhir+ "&nama="+namaku+"&sid="+
    Math.random(),true);
        ajaxku.onreadystatechange = aturAmbilPesan;
        ajaxku.send(null);
    }
}

function aturAmbilPesan() {
    if(ajaxku.readyState == 4) {
        var chat_div = document.getElementById("div_chat");
        var data = eval("(" + ajaxku.responseText + ")");
        for(i=0;i<data.messages.pesan.length;i++){
            chat_div.innerHTML += "<font color=red>" +data.messages.pesan[i].nama + "</font>";
            chat_div.innerHTML += "<font size=1>(" +data.messages.pesan[i].waktu + ")</font>";
            chat_div.innerHTML += " : " + data.messages.pesan[i].teks +"<br>";
            chat_div.scrollTop = chat_div.scrollHeight;
            pesanakhir = data.messages.pesan[i].id;

        }
    }
    timer = setTimeout("ambilPesan()",1000);
}

function kirimPesan() {
    pesannya = document.getElementById("pesan").value
    namaku = document.getElementById("nama").value
    if(pesannya != "" && namaku != "") {
        ajaxku.open("GET","ambilchat.php?akhir="+pesanakhir+"&nama="+namaku+"&pesan="+pesannya+"&sid="+Math.random(),true);
        ajaxku.onreadystatechange = aturAmbilPesan;
        ajaxku.send(null);
        document.getElementById("pesan").value = "";
    }else {
        alert("Nama atau pesan masih kosong");
    }
}

function aturKirimPesan() {
    clearInterval(timer);
    ambilPesan();
}

function blockSubmit() {
    kirimPesan();
    return false;
}

</script>


