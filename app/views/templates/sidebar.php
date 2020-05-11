<section id="sideMenu">
    <button class="closebtn" onclick="closeNav()"><</button>
    <div class="logo-app">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="150" heigth="150">
    </div>
    <nav>
        <?php
        $halaman = $data['judul'];
        
        if ($_SESSION["role_user"] == 'Admin') { ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Beranda") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Beranda</a>
            <a href="<?= BASEURL;?>/Project/index" <?php if($halaman == "Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/project.png" alt="" width="20" heigth="20">&nbsp Data Project</a>
            <a href="<?= BASEURL;?>/ListOfMaterial/index" <?php if($halaman == "List Material") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/mitra.png" alt="" width="20" heigth="20">&nbsp Data List Material</a>
            <a href="<?= BASEURL;?>/DesainOSP/index.php" <?php if($halaman == "") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/desain.png" alt="" width="20" heigth="20">&nbsp Data Design OSP FO</a>
            <a href="<?= BASEURL;?>/StatusPo/index" <?php if($halaman == "") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Validasi Design OSP FO</a>
            <a href="<?= BASEURL;?>/Pengguna/index" <?php if($halaman == "Pengguna") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Data Users</a>
            <a href="<?= BASEURL;?>/Pengguna/ubahProfile/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
                               
        <?php }
        // Role User Admin Mitra
        else if($_SESSION["role_user"] == 'Pakar'){ ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Beranda") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Beranda</a>
            <a href="<?= BASEURL;?>/user/index" <?php if($halaman == "User") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Data Material dan Jasa</a>
            <a href="<?= BASEURL;?>/mitra/index" <?php if($halaman == "Mitra") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/mitra.png" alt="" width="20" heigth="20">&nbsp Data Jenis Design FTTx</a>
            <a href="<?= BASEURL;?>/StatusPo/index.php" <?php if($halaman == "") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Data Design OSP FO</a>
            <a href="<?= BASEURL;?>/StatusPo/index" <?php if($halaman == "") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Validasi Design OSP FO</a>
            <a href="<?= BASEURL;?>/Pesan/index/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Pesan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Pesan</a>
            <a href="<?= BASEURL;?>/Pengguna/index" <?php if($halaman == "Obrolan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Obrolan</a>
            <a href="<?= BASEURL;?>/Pengguna/ubahProfile/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
        <?php } 
        // Role user Admin Procurement
        else if($_SESSION["role_user"] == 'Anggota'){ ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Beranda") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Beranda</a>
            <a href="<?= BASEURL;?>/user/index" <?php if($halaman == "User") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Data Material dan Jasa</a>
            <a href="<?= BASEURL;?>/mitra/index" <?php if($halaman == "Mitra") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/mitra.png" alt="" width="20" heigth="20">&nbsp Data Jenis Design FTTx</a>
            <a href="<?= BASEURL;?>/StatusPo/index.php" <?php if($halaman == "") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Data Design OSP FO</a>
            <a href="<?= BASEURL;?>/Pesan/index/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Pesan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Pesan</a>
            <a href="<?= BASEURL;?>/Pengguna/index" <?php if($halaman == "Obrolan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Obrolan</a>
            <a href="<?= BASEURL;?>/Pengguna/ubahProfile/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>  
        <?php } ?>

    </nav>
</section>
<header id="main">
    <div class="search-area">
        <div>  
            <button class="openbtn" onclick="openNav()">☰</button>
            <a href="<?= BASEURL;?>/Obrolan/index/<?= $_SESSION['nik'] ?>"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/chat.png" alt="" width="35" heigth="35"></a> 
            <a href="<?= BASEURL;?>/Pesan/index/<?= $_SESSION['nik'] ?>"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/pesan.png" alt="" width="35" heigth="35"></a> 
        </div>
    </div>
    <div class="user-area">
        <!-- <p> Welcome <?= $_SESSION['nama'] ?> </p> -->
        Hallo, <?= $_SESSION['nama'] ?> !
        <a href="<?= BASEURL;?>/login/logout"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/logout.png" alt="" width="40" heigth="40"></a>
    </div>
</header>
<section id="content-area">