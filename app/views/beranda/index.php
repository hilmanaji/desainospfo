<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KMS OSP FO</title>
        <link rel="icon" href="<?= BASEURL; ?>/img/favicon.png" type="png" sizes="18x18">
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/beranda.css">
</head>
<body>
        <header>
                <div class="">
                        <h2>Knowledge Management System</h2>
                        <h3>Design Outside Plan Fiber Optic</h3>
                </div>
        </header>
        <button class="tablink" onclick="openPage('Home', this, '#109fca')" id="defaultOpen">Beranda</button>
        <button class="tablink" onclick="openPage('News', this, '#109fca')">Tentang KM</button>
        <button class="tablink" onclick="openPage('Contact', this, '#109fca')">Team KM</button>
        <button class="tablink" onclick="openPage('About', this, '#109fca')">Panduan Aplikasi</button>

        <div id="Home" class="tabcontent">
        <h3>Home</h3>
        <p><a id="submit-btn" href="<?= BASEURL; ?>/Login/index">LOGIN</a></p>
        </div>

        <div id="News" class="tabcontent">
        <h3>News</h3>
        <p>Some news this fine day!</p> 
        </div>

        <div id="Contact" class="tabcontent">
        <h3>Contact</h3>
        <p>Get in touch, or swing by for a cup of coffee.</p>
        </div>

        <div id="About" class="tabcontent">
        <h3>About</h3>
        <p>Who we are and what we do.</p>
        </div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>