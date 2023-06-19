<?php
    require 'koneksi.php';
    $sql= "SELECT * FROM lenovo";
    $datas = $server->query($sql);
    $sql = "SELECT * FROM lenovo WHERE status = 'tersedia'";
    $result = mysqli_query($server, $sql);
    $jumlahA = mysqli_num_rows($result);
    $sqli = "SELECT * FROM lenovo WHERE status = 'dipinjam'";
    $resul = mysqli_query($server, $sqli);
    $jumlahI = mysqli_num_rows($resul);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/apercu-movistar" rel="stylesheet">

</head>
<style>
    body {
        width: 1100px;
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
        padding-left: 15px;
    }
    .side img {
        margin-top: 20px;
        margin-bottom: 20px;
        /* position: fixed; */
    }
    .side a{
        color: #636B71;
        margin-bottom: -10px;
        /* position: fixed; */
    }
    .kanan{
        margin-left: 250px;
        margin-top: -505px;
        color: white;
        font-family: 'Apercu Movistar', sans-serif;
        margin-right: 50px;
    }
    .judul h1{
        font-size: 60px;
        margin-top: -110px;
        padding-top: -50px;
        padding-bottom: 20px;
    }
    .laptop button {
        background: #FFFFFF;
        box-shadow: 0px 10px 30px rgba(0, 163, 255, 0.05), 0px 2px 40px rgba(0, 117, 255, 0.1);
        border-radius: 8px; 
        width: 150px; 
        height: 150px;
        margin-left: 25px;
        margin-right: 25px;
        margin-bottom: 50px;   
        justify-content: space-around;
    }
    .laptop {
        background: white;
        width: 1070px;
        margin-left: -50px;
        padding-top: 30px;
    }
    .laptop p {
        color: #787878;
        margin-top: -7px; 
        margin-bottom: 7px;
        font-size: 15px;
    }
    .laptop i {
        padding-top : -70px;
        font-size: 60px;
        color: #787878;
    }
    .button {
        margin-right: 30px;
        border-color: white;
        margin-right: 100px;
        width: 190px;
        height:171px;
        margin-left: 30px;
    }
    .laptop button {
        width: 190px;
        height:171px;
        margin-bottom: 15px;
        margin-left: 30px;
    }
    .turun {
        margin-top: 40px;
        margin-left: -60px;
    }
    .modal-content h1 {
        color: #787878;
    }
    .avaible {
      position: absolute;
      width: 124.3px;
      height: 107.96px;
      left: calc(50% - 124.3px/2 + 222.15px);
      top: 114px;
      padding-top: 20px;
      /* background: #7FE9D6; */
      box-shadow: 0px 10px 30px rgba(75, 72, 233, 0.1);
      border-radius: 8px;
    }
    .info h1 h6 {
        margin-bottom: -60px;
    }
    .in-use {
      position: absolute;
      width: 124.3px;
      height: 107.96px;
      left: calc(50% - 124.3px/2 + 359.56px);
      top: 115.87px;
      padding-top: 17px;
      /* background: #EA7A7A; */
      border-radius: 8px;
    }

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url('https://fonts.cdnfonts.com/css/apercu-movistar');
</style>
<body>
    <div class="side">
    <ul>
        <li><img src="img/user-icon.png"></li>
        <div class="nav">
        <li><a href="dashboard.php"><i class="bi bi-house-door"></i>&nbsp UTAMA</li></a>
        <li><a href=""><i class="bi bi-app"></i> &nbsp PENGEMBALIAN</li></a>
        <li><a href="contactCS.php"><i class="bi bi-telephone-fill"></i>&nbsp CONTACT</a></li>
        <a class="turun" href="logout.php"><li>logout</li></a>
        </div>
    </ul>
    </div>
    
    <div class="kanan">
        <div class="judul">
        <h1>LENOVO</h1>
        <div class="info">
        <div class="avaible">
        <center>
        <h1><?=$jumlahA?></h1>
        <h6>Avaible</h6>
        </div>
        </center>
        <div class="in-use">
        <h1><?=$jumlahI?></h1>
        <h6>in-use</h6>
        </div>
        </div>
        </div>

        <div class="laptop">
        <?php foreach( $datas as $data) { ?>
            <button class ="button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-laptop"></i>
                <p>no laptop: <?= $data["nomor"]?></p>
                <p>status: <?= $data["status"]?></p>
            </button>
        <?php }?>
        </div>
    </div>

<!-- Modal -->
<?php 

?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" data-bs-dismiss="modal"><i class="bi bi-arrow-90deg-left" data-bs-dismiss="modal"></i></button>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Silahkan isi form terlebih dulu</h1>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        <h3>Lenovo</h3>
        <label>No Laptop</label> <br>
        <input name="nomor" class="form-control" type="text" placeholder="input nomor laptop" aria-label="default input example">
        <label>Nama</label> <br>
        <input name="nama" class="form-control" type="text" placeholder="input nama" aria-label="default input example">
        <label>NIS</label><br>
        <input name="nis" class="form-control" type="" placeholder="input nis" aria-label="default input example">
        <label>Rombel</label><br>
        <input name="rombel" class="form-control" type="text" placeholder="input rombel" aria-label="default input example"> <br>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php 
    if(isset($_POST['submit'])) { 
        $barang = "Laptop Lenovo";
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $nis = $_POST['nis'];
        $rombel = $_POST['rombel'];
        $status = "butuh konfimasi";
        $sql = "INSERT INTO db_barang (barang, nama, no, nis, rombel, status) VALUES ('$barang', '$nama', '$nomor', '$nis', '$rombel', '$status')";
        $result = mysqli_query($server, $sql);
        if ($result) {
            $sql = "UPDATE lenovo SET status = 'dipinjam' WHERE nomor = '$nomor'";
            $result = mysqli_query($server, $sql);
        }
    }
?>
<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
</body>
</html>