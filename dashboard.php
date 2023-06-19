<?php
    session_start();
 
    if (!isset($_SESSION['email'])) {
        header("Location:index.php");
    }

    require 'koneksi.php';
    $email= $_SESSION['email'];

    $sql= "SELECT * FROM login where email = '$email'";
    $datas = $server->query($sql);

    $sql = "SELECT * FROM lenovo WHERE status = 'tersedia'";
    $result = mysqli_query($server, $sql);
    $jumlahAL = mysqli_num_rows($result);
    $sqli = "SELECT * FROM lenovo WHERE status = 'dipinjam'";
    $resul = mysqli_query($server, $sqli);
    $jumlahIL = mysqli_num_rows($resul);

    $sql = "SELECT * FROM acer WHERE status = 'tersedia'";
    $result = mysqli_query($server, $sql);
    $jumlahAA = mysqli_num_rows($result);
    $sqli = "SELECT * FROM acer WHERE status = 'dipinjam'";
    $resul = mysqli_query($server, $sqli);
    $jumlahIA = mysqli_num_rows($resul);

    $sql = "SELECT * FROM hp WHERE status = 'tersedia'";
    $result = mysqli_query($server, $sql);
    $jumlahAHP = mysqli_num_rows($result);
    $sqli = "SELECT * FROM hp WHERE status = 'dipinjam'";
    $resul = mysqli_query($server, $sqli);
    $jumlahIHP = mysqli_num_rows($resul);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/apercu-movistar" rel="stylesheet">

</head>
<style>
    body {
        height: 570px;
        background : url(img/login-zoom.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    ul {
        list-style-type: none;
    }
    .side h5 {
        font-size: 15px;
        margin-left: 25px;
    }
    .nav li {
        margin-top: 20px;
        margin-left: -25px;
    }
    .side{
        background-color : white;
        text-align: left;
        width: 200px;
        height: 570px;
        font-family: 'Apercu Movistar', sans-serif;
        color: #636B71;
    }
    .side img {
        margin-left: 5px;
        margin-top: 20px;
    }
    .side a{
        color: #636B71;
        margin-bottom: -10px;
    }
    .kanan{
        padding-left: 250px;
        margin-top: -550px;
        color: white;
        font-family: 'Apercu Movistar', sans-serif;
        padding-right: 50px;
    }
    .judul h1{
        font-size: 60px;
        margin-top: -10px;
    }
.pinjam{
    color:color: #576A80;
box-shadow: 0px 1318px 4px rgba(18, 37, 87, 0.25);
}
    .card {
        display: flex;
        justify-content: space-around;
        color: white;
        text-decoration: none;
    }
    .card-f {
        margin-top: -270px;
        margin-left: 35px;
    }
    .card-title {
        font-size: 30px;
    }
    .card-text {
        padding-top: 50px;
    }
    .card-body {
        color: white;
    }
   
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url('https://fonts.cdnfonts.com/css/apercu-movistar');
</style>
<body>
    <div class="side">
    <ul>
        <li><img src="img/user-icon.png"></li>
        <h5><?=($_SESSION['email'])?></h5>
        <div class="nav">
        <li><a href="dashboard.php"><i class="bi bi-house-door"></i>&nbsp UTAMA</li></a>
        <li><a href=""><i class="bi bi-app"></i> &nbsp PENGEMBALIAN</li></a>
        <li><a href="contactCS.php"><i class="bi bi-telephone-fill"></i>&nbsp CONTACT</a></li>
        <a href="logout.php"><li>logout</li></a>
        </div>
    </ul>
    </div>
    <div class="kanan">
        <div class="judul">
        <?php
     while ($data = mysqli_fetch_array($datas))
     { ?>
            <h4>Selamat Datang,</h4>
            <h1><?=($_SESSION['email'])?> <i class="bi bi-house-door-fill"></i></h1>
            <h5><?= $data['rombel'] . "-" . $data['nis']?></h5>
        </div>
        <?php }?>
        <div class="pinjam">
            <h2>Pinjam apa hari ini?</h2>
            <hr>
        <div class="card">
            <a href="dataL.php">
            <div class="card1">
            <div class="card-body">
                <img src="img/lenovo.png"style="max-width:210px">
                <div class ="card-f">
              <h5 class="card-title">Laptop<br>Lenovo</h5>
               <br><br><br>
                <p class="card-text">avaible &nbsp<?=$jumlahAL?> <br> In-use &nbsp <?=$jumlahIL?> <p>
                </div>
            </div>
            </div>
            </a>
             
            <a href="dataA.php">
            <div class="card2">
            <div class="card-body">
            <img src="img/acer.png"style="max-width:210px">
            <div class ="card-f">
              <h5 class="card-title">Laptop<br>Acer</h5>
               <br><br><br>
               <p class="card-text">avaible &nbsp<?=$jumlahAA?> <br> In-use &nbsp <?=$jumlahIA?> <p>
            </div>
            </div>
            </div>
            </a>

            <a href="dataHP.php">
            <div class="card3">
            <div class="card-body">
            <img src="img/hp.png" style="max-width:210px">
            <div class ="card-f">
              <h5 class="card-title">HP<br><br></h5>
               <br><br><br>
               <p class="card-text">avaible &nbsp<?=$jumlahAHP?> <br> In-use &nbsp <?=$jumlahIHP?> <p>
            </div>
            </div>
            </div>
            </a>
            
            <div class="card4">
            <div class="card-body">
            <img src="img/lenovo.png" style="max-width:210px">
            <div class ="card-f">
              <h5 class="card-title">Lainnya<br><br></h5>
               <br><br><br>
               <p class="card-text">avaible &nbsp &nbsp 0 <br> In-use &nbsp &nbsp 0<p>
            </div>
            </div>
            </div>

        </div>
        </div>
    </div>
</body>
</html>