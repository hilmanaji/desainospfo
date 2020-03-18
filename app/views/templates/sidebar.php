<section id="sideMenu">
    <button class="closebtn" onclick="closeNav()"><</button>
    <div class="logo-app">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="150" heigth="150">
    </div>
    <nav>
        <?php
        $halaman = $data['judul'];
        
        if ($_SESSION["role_user"] == 'Admin Project') { ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Dashboard") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Dashboard</a>
            <a href="<?= BASEURL;?>/kontrak/index" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/kontrak.png" alt="" width="20" heigth="20">&nbsp Kontrak</a>
            <a href="<?= BASEURL;?>/Po/index" <?php if($halaman == "Purchase Order") echo "class='active'"; ?> ><img style="float : left;" src="<?= BASEURL;?>/img/purchase.png" alt="" width="25" heigth="25">&nbsp Purchase Order</a>
            <a href="<?= BASEURL;?>/project/index" <?php if($halaman == "Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Project</a>
            <a href="<?= BASEURL;?>/progresproject/index" <?php if($halaman == "Progres Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Progres Project</a>
            <a href="<?= BASEURL;?>/progrestagihan/index" <?php if($halaman == "Progres Tagihan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/tagihan.png" alt="" width="20" heigth="20">&nbsp Progres Tagihan</a>
            <a href="<?= BASEURL;?>/laporan/index" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/laporan.png" alt="" width="20" heigth="20">&nbsp Laporan</a>
            
            <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/teritori.png" alt="" width="20" heigth="20">&nbsp Teritori
                <i><img class="ceret" src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
            </button>
            <div class="dropdown-container">
                <a href="<?= BASEURL;?>/regional/index" <?php if($halaman == "Regional") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/regional.png" alt="" width="20" heigth="20">&nbsp Regional</a>
                <a href="<?= BASEURL;?>/witel/index" <?php if($halaman == "Witel") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/regional.png" alt="" width="20" heigth="20">&nbsp Witel</a>
                <a href="<?= BASEURL;?>/datel/index" <?php if($halaman == "Datel") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/regional.png" alt="" width="20" heigth="20">&nbsp Datel</a>
                <a href="<?= BASEURL;?>/sto/index" <?php if($halaman == "STO") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/regional.png" alt="" width="20" heigth="20">&nbsp STO</a>
            </div>
            <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/setting.png" alt="" width="20" heigth="20">&nbsp Setting
                <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
            </button>
            <div class="dropdown-container">
                <a href="<?= BASEURL;?>/user/index" <?php if($halaman == "User") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/users.png" alt="" width="20" heigth="20">&nbsp Data Users</a>
                <a href="<?= BASEURL;?>/mitra/index" <?php if($halaman == "Mitra") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/mitra.png" alt="" width="20" heigth="20">&nbsp Data Mitra</a>
                <a href="<?= BASEURL;?>/StatusPo/index.php" <?php if($halaman == "Status Po") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Status PO</a>
                <a href="<?= BASEURL;?>/StatusProject/index.php" <?php if($halaman == "Status Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/status.png" alt="" width="20" heigth="20">&nbsp Status Project</a>
                <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
            </div>
        <?php }
        // Role User Admin Mitra
        else if($_SESSION["role_user"] == 'Admin Mitra'){ ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Dashboard") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Dashboard</a>
            <a href="<?= BASEURL;?>/kontrak/index" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/kontrak.png" alt="" width="20" heigth="20">&nbsp Kontrak</a>
            <a href="<?= BASEURL;?>/po/index" <?php if($halaman == "Purchase Order") echo "class='active'"; ?> ><img style="float : left;" src="<?= BASEURL;?>/img/purchase.png" alt="" width="25" heigth="25">&nbsp Purchase Order</a>
            <a href="<?= BASEURL;?>/project/index" <?php if($halaman == "Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Project</a>
            <a href="<?= BASEURL;?>/progresproject/index" <?php if($halaman == "Progres Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Progres Project</a>
            <a href="<?= BASEURL;?>/progrestagihan/index" <?php if($halaman == "Progres Tagihan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/tagihan.png" alt="" width="20" heigth="20">&nbsp Progres Tagihan</a>
            <a href="<?= BASEURL;?>/laporan/index" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/laporan.png" alt="" width="20" heigth="20">&nbsp Laporan</a>

            <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/setting.png" alt="" width="20" heigth="20">&nbsp Setting
                <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
            </button>
            <div class="dropdown-container">
                <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
            </div>       
        <?php } 
        // Role user Admin Procurement
        else if($_SESSION["role_user"] == 'Admin Procurement'){ ?>
           <a href="<?= BASEURL;?>/" <?php if($halaman == "Dashboard") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Dashboard</a>
            <a href="<?= BASEURL;?>/progresproject/index" <?php if($halaman == "Progres Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Progres Project</a>
            <a href="<?= BASEURL;?>/progrestagihan/index" <?php if($halaman == "Progres Tagihan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/tagihan.png" alt="" width="20" heigth="20">&nbsp Progres Tagihan</a>
            <a href="<?= BASEURL;?>/laporan/index" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/laporan.png" alt="" width="20" heigth="20">&nbsp Laporan</a>

            <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/setting.png" alt="" width="20" heigth="20">&nbsp Setting
                <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
            </button>
            <div class="dropdown-container">
                <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
            </div>      
        <?php } 

        else if($_SESSION["role_user"] == 'Manajer Konstruksi'){ ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Dashboard") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Dashboard</a>
            <a href="<?= BASEURL;?>/project/index" <?php if($halaman == "Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Project</a>
            <a href="<?= BASEURL;?>/progresproject/index" <?php if($halaman == "Progres Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Progres Project</a>
            <a href="<?= BASEURL;?>/progrestagihan/index" <?php if($halaman == "Progres Tagihan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/tagihan.png" alt="" width="20" heigth="20">&nbsp Progres Tagihan</a>
            <a href="<?= BASEURL;?>/laporan/index" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/laporan.png" alt="" width="20" heigth="20">&nbsp Laporan</a>

            <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/setting.png" alt="" width="20" heigth="20">&nbsp Setting
                <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
            </button>
            <div class="dropdown-container">
                <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
            </div>      
        <?php } 

        else if($_SESSION["role_user"] == 'Direktur Mitra'){ ?>
            <a href="<?= BASEURL;?>/" <?php if($halaman == "Dashboard") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/dashboard.png" alt="" width="20" heigth="20">&nbsp Dashboard</a>
             <a href="<?= BASEURL;?>/progresproject/index" <?php if($halaman == "Progres Project") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/progress.png" alt="" width="20" heigth="20">&nbsp Progres Project</a>
             <a href="<?= BASEURL;?>/progrestagihan/index" <?php if($halaman == "Progres Tagihan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/tagihan.png" alt="" width="20" heigth="20">&nbsp Progres Tagihan</a>
             <a href="<?= BASEURL;?>/laporan/index" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/laporan.png" alt="" width="20" heigth="20">&nbsp Laporan</a>
 
             <button class="dropdown-btn"><img style="float : left;" src="<?= BASEURL;?>/img/setting.png" alt="" width="20" heigth="20">&nbsp Setting
                 <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
             </button>
             <div class="dropdown-container">
                 <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Kontrak") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Ubah Profile</a>
             </div>      
         <?php } ?>

    </nav>
</section>
<header id="main">
    <div class="search-area">
        <div>  
            <button class="openbtn" onclick="openNav()">☰</button>  
        </div>
    </div>
    <div class="user-area">
        <!-- <p> Welcome <?= $_SESSION['nama'] ?> </p> -->
        Hallo, <?= $_SESSION['nama'] ?> !
        <a href="<?= BASEURL;?>/login/logout"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/logout.png" alt="" width="40" heigth="40"></a>
    </div>
</header>
<section id="content-area">