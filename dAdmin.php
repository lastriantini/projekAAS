<?php
    require 'koneksi.php';

    session_start();
 
    if (isset($_SESSION['email'])) {
        header("Location:index.php");
    }

    $sql = "SELECT * FROM db_barang";
    $datas = $server->query($sql);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST["id"];
        $option = $_POST["option"];
        $query = "UPDATE db_barang SET status = '$option' WHERE id = $id";
        mysqli_query($server, $query);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
        <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    .kanan{
        margin-left: 250px;
        margin-top: -550px;
        color: white;
        font-family: 'Apercu Movistar', sans-serif;
        margin-right: 50px;
    }
    .judul h1{
        font-size: 60px;
        margin-top: -10px;
    }
    .kanan table {
        margin-top: 30px;
        background-color: #8BB0F6;
        color: #636B71;
    }
    table {
        color: #636B71;
    }
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url('https://fonts.cdnfonts.com/css/apercu-movistar');
</style>
<body>
    <div class="side">
    <ul>
        <li><img src="img/user-icon.png"></li>
        <h5>admin</h5>
        <div class="nav">
        <li><a href="">LAPORAN <i class="bi bi-arrow-right"></i></a></li>
        <li><a href="">STORAGE<i class="bi bi-arrow-right"></i></a></li>
        <li><a href="">BERI PINJAMAN<i class="bi bi-arrow-right"></i></a></li>
        </div>
    </ul>
    </div>

    <div class="kanan">
        <div class="judul">
            <h4>Selamat Datang,</h4>
            <h1>Administrator <i class="bi bi-house-door-fill"></i></h1>
            <h6></h6>
        </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">BARANG</th>
      <th scope="col">NO</th>
      <th scope="col">NIS SISWA</th>
      <th scope="col">ROMBEL</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach( $datas as $data) { ?>
            <tr>
                <td><?= $data["id"]?></td>
                <td><?= $data["barang"]?></td>
                <td><?= $data["no"]?></td>
                <td><?= $data["nis"]?></td>
                <td><?= $data["rombel"]?></td>
                <td><?= $data["status"]?></td>
                <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    action
  </button>
  <ul class="dropdown-menu">
                                    <li>
                                        <form action="dAdmin.php" method="post">
                                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                            <input type="hidden" name="option" value="belum dikonfirmasi">
                                            <button type="submit">belum dikonfirmasi</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="dAdmin.php" method="post">
                                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                            <input type="hidden" name="option" value="dipinjam">
                                            <button type="submit">konfirmasi</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="dAdmin.php" method="post">
                                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                            <input type="hidden" name="option" value="dikembalikan">
                                            <button type="submit">dikembalikan</button>
                                        </form>
                                    </li>
                                </ul>
</div>

        <?php }?>
  </tbody>
</table>
    </div>
</body>
</html>
