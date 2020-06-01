<?php

class Obrolan extends Controller {
    public function __construct(){
		
	}

    public function index($nik) {
        $data['judul'] = 'Obrolan';
        $data['sub_judul'] = 'Obrolan Langsung';
        $data['data_obrolan'] = $this->model('DataHandle')->getListObrolan($id=$nik);
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('obrolan/index', $data);
        $this->view('templates/footer');
    }

    function mulaiObrolan() {
        
		$this->view('obrolan/v_obrolan');
      
    }

    function AmbilChat()
    {
        // $link ini bisa di ganti dengan class database / akses jika ada
        $link = mysqli_connect("localhost", "root", "", "chat_ajax");

        $nama = $_GET['nama'];
        $pesan = isset($_GET['pesan']) ? $_GET['pesan'] : '';
        $waktu = date("H:i");
        $akhir = $_GET['akhir'];

        $json = '{"messages": {';
        if ($akhir == 0) {
            $nomor = mysqli_query($link, "select nomor from tbl_chat order by nomor desc limit 1");
            $n = mysqli_fetch_array($nomor);
            $no = $n['nomor'] + 1;
            $json .= '"pesan":[ {';
            $json .= '"id":"' . $no . '","nama":"Admin","teks":"Selamat datang di chatting room","waktu": "' . $waktu . '"}]';
            $masuk = mysqli_query($link, "INSERT INTO tbl_chat VALUES(null, 'Admin', '$nama bergabung dalam chat','$waktu')");
        } else {
            if ($pesan != '') {
                $masuk = mysqli_query($link, "INSERT INTO tbl_chat VALUES(null, '$nama', '$pesan', '$waktu')");
            }
            $query = mysqli_query($link, "SELECT * FROM tbl_chat WHERE nomor > $akhir ");
            $json .= '"pesan":[ ';
            while ($x = mysqli_fetch_array($query)) {
                $json .= '{';
                $json .= '"id": "' . $x['nomor'] . '", "nama": "' . htmlspecialchars($x['nama']) . '", "teks": "' . htmlspecialchars($x['pesan']) . '", "waktu": "' . $x['waktu'] . '"},';
            }
            $json = substr($json, 0, strlen($json) - 1);
            $json .= ']';
        }

        $json .= '}}';
        echo $json;
    }
    function Chatting()
    { ?>
        <html>

        <head>
            <title>Chat Love BY: Hilman</title>
            <style>
                body {
                    font-family: sans-serif;
                    background: url("bg.jpg");
                    background-size: cover;
                }

                .container {
                    width: 500px;
                    height: 600px;
                    margin: auto;
                }

                #div_chat {
                    height: 300px;
                    width: 500px;
                    overflow: auto;
                    background-color: rgba(220, 220, 220, 0.5);
                    border: 1px solid #555555;
                    margin: 20px 0;
                    padding: 10px;
                    box-shadow: 1px 1px 15px;
                }

                h1 {
                    text-align: center;
                }

                h1 a {
                    text-decoration: none;
                    color: rgba(0, 0, 0, 0.4);
                    transition-property: color;
                    transition-duration: 2s;
                }

                h1 a:hover {
                    color: rgba(0, 0, 0, 1);
                }
            </style>

            <script>
                var ajaxku = buatAjax();
                var tnama = 0;
                var pesanakhir = 0;
                var timer;

                function taruhNama() {
                    if (tnama == 0) {
                        document.getElementById("nama").disabled = "true";
                        tnama = 1;
                    } else {
                        document.getElementById("nama").disabled = "";
                    }
                    ambilPesan();
                }

                function buatAjax() {
                    if (window.XMLHttpRequest) {
                        return new XMLHttpRequest();
                    } else if (window.ActiveXObject) {
                        return new ActiveXObject("Microsoft.XMLHTTP");
                    }
                }

                function ambilPesan() {
                    namaku = document.getElementById("nama").value
                    if (ajaxku.readyState == 4 || ajaxku.readyState == 0) {

                        ajaxku.open("GET", "/param" + pesanakhir + "/param" + namaku + "/param" +
                            Math.random(), true);
                        ajaxku.onreadystatechange = aturAmbilPesan;
                        ajaxku.send(null);
                    }
                }

                function aturAmbilPesan() {
                    if (ajaxku.readyState == 4) {
                        var chat_div = document.getElementById("div_chat");
                        var data = eval("(" + ajaxku.responseText + ")");
                        for (i = 0; i < data.messages.pesan.length; i++) {
                            chat_div.innerHTML += "<font color=red>" + data.messages.pesan[i].nama + "</font>";
                            chat_div.innerHTML += "<font size=1>(" + data.messages.pesan[i].waktu + ")</font>";
                            chat_div.innerHTML += " : " + data.messages.pesan[i].teks + "<br>";
                            chat_div.scrollTop = chat_div.scrollHeight;
                            pesanakhir = data.messages.pesan[i].id;

                        }
                    }
                    timer = setTimeout("ambilPesan()", 10000);
                }

                function kirimPesan() {
                    pesannya = document.getElementById("pesan").value
                    namaku = document.getElementById("nama").value
                    if (pesannya != "" && namaku != "") {

                        ajaxku.open("GET", "v_obrolan.php?aksi=get&akhir=" + pesanakhir + "&nama=" + namaku + "&pesan=" + pesannya + "&sid=" + Math.random(), true);
                        ajaxku.onreadystatechange = aturAmbilPesan;
                        ajaxku.send(null);
                        document.getElementById("pesan").value = "";
                    } else {
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

        </head>

        <body>
            <div class="container">
                <h1><a href="#">Welcome To Love Chat</a></h1>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">

                <div id="div_chat">

                </div>

                <form onSubmit="return blockSubmit();">
                    <label for="pesan">Pesan :</pesan>
                        <input type="text" name="pesan" id="pesan" size="50">
                        <input type="button" value="kirim" onclick="kirimPesan()">
                </form>
            </div>
        </body>

        </html>
<?php
    }
}
