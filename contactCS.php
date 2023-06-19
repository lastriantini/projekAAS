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
    a {
        text-decoration: none;
    }
    ul {
        list-style-type: none;
    }
    .side h5 {
        font-size: 15px;
        margin-left: 28px;
    }
    .nav li {
        margin-top: 20px;
        margin-left: -7px;
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
        margin-left: -25px;
        /* position: fixed; */
    }
    .kanan{
        margin-left: 290px;
        margin-top: -480px;
        color: white;
        font-family: 'Apercu Movistar', sans-serif;
        margin-right: 50px;
        width: 885px;
        height: 400px;
        background: linear-gradient(101.88deg, rgba(255, 255, 255, 0.56) 4.05%, rgba(255, 255, 255, 0.56) 48.89%, rgba(255, 255, 255, 0.56) 98.35%);
    }
    input {
        border: none;
        background: transparent;
        border-bottom: 1px solid black;
    }
    button{
        color: white;
        background-color: #373B61;
    }
    .kiri-card{
        margin-right: 450px;
        margin-left: 50px;
        padding-top: 50px;
    }
    .kanan-card img {
        margin-left: 600px;
        margin-top: -250px;
        padding-bottom: 20px;
        width: 220px;
    }
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url('https://fonts.cdnfonts.com/css/apercu-movistar');
</style>
<body>
    <div class="side">
    <ul>
        <li><img src="img/user-icon.png"></li>
        <div class="nav">
        <li><a href="index.php"><i class="bi bi-house-door"></i>&nbsp UTAMA</a></li>
        <li><a href="#"><i class="bi bi-app"></i> &nbsp PENGEMBALIAN</a></li>
        <LI><a href="#"><i class="bi bi-telephone-fill"></i>&nbsp CONTACT</a></LI>
        </div>
    </ul>
    </div>
    <div class="kanan">
        <div class="kiri-card">
        <div class="judul">
            <h1>Kontak CS Untuk Informasi lebih lanjut</h1>
            <hr>
        </div>
        <h4> Bila Memiliki Masalah, Keluhan, pertanyaan. Silahkan hubungi nomer berikut</h4>
        <div class="form">
            <label>Hubungi CS</label>
            <input type="text" placeholder="WA : 083112326534">
            <button type="submit">HUBUNGI</button>
        </div>
        </div>
        <div class="kanan-card">
            <img src="img/Logo-orang.png">
        </div>
    </div>
</body>