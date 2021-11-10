<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body style="background: url(bgcontact.png);    background-repeat: no-repeat;
    background-size: cover;">
    <Header>
        <div class="kananatas">
            <a href="References.html"> References </a>| 
            <a href="Contact Us.html"> Contact Us </a>
        </div>
        <div id="awal">
            <h1>Travel  Location</h1>
        </div>
    </Header>
    
        <div id="sticky">
            | <a href="index.html">•  Home  •  </a>|
            <a href="Jawa Barat.html">•  Jawa Barat  •  </a>|
            <a href="Kalimantan Tengah.html">•  Kalimantan Tengah  •  </a>|
            <a href="Papua.html">•  Papua  •  </a>|
            <a href="Kalimantan Timur.html">•  Kalimantan Timur  •  </a>|
            <a href="Sulawesi Utara.html">•  Sulawesi Utara  •  </a>|
            <a href="Bali.html">•  Bali  •  </a>|
        </div>
    </header>
    <div class="contact">
        <h1 class="cont">Contact Us</h1>
            <div class="formcontact">
                <form  method="POST" action="">
                    <label>Email</label><br>
                    <input type="email"" name="email" placeholder="Email..." id="email">
                    <br>
                    <label>Pesan</label><br>
                    <textarea name="pesan" placeholder="Tulis pesan anda..." rows="4" cols="40"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Kirim" name="ok">
                </form>
            </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['ok'])){
    if(empty($_POST['email']) || empty($_POST['pesan'])){
        echo "Masukkan data";
    }else{
        $email=$_POST['email'];
        $pesan=$_POST['pesan'];
        $buka=fopen("hasil.html",'a');
        fwrite($buka,"email : ${email} <br> ");
        fwrite($buka," pesan : ${pesan} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);

    }
}?>