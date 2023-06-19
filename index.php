<?php 
    include 'koneksi.php';
     
    error_reporting(0);
     
    session_start();
     
    if (isset($_SESSION['email'])) {
        header('Location: dashboard.php');
    }else {
    
    if (isset($_POST['submit'])) { 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM login WHERE email='$email' AND password='$password' ";
        $result = mysqli_query($server, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        
        $ceksesi = $_SESSION['email'];
        echo "$ceksesi";
        
        header('Location:dashboard.php');
    }elseif ($email == "admin@smkwikrama" && $password =="wikrama") {
        $ceksesi = $_SESSION['email'];
        echo "$ceksesi";
        
        header('Location:dAdmin.php');
    } else {
            echo "<script>alert('email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
       
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background: url(img/Login-bg.png);
        background-position: center;
        background-size: cover;
        max-height: 400px;

    }
    h4{
        padding-bottom: 20px;
    }
    .form1 {
        margin-top : -750px;
        width : 400px;
        height : 490px;
        margin-left: 800px;
        text-align: center;
        background-color: white;
        padding-left:50px;
        padding-right:50px;
        padding-top: 30px;
        padding-bottom: 30px;
        color: #716B6B;
     }
    .img1 img {
        height : 570px;
    }
    .botak img {
        margin-bottom : 30px;
        width: 80px;
     }
    p {
        margin-bottom: -4px;
        margin-top: 3px;
        font-size : 11px;
     }
     .judul {
        text-align : left;
        color: white;
        padding-left: 60px;
        padding-top: 70px;
     }
     .judul h1 {
        font-size: 50px;
     }
    .p a {
        font-size: 11px;
     }
     button {
        margin-bottom : 17px;
        background: #525E64;
box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.13);
border-radius: 6px;
     }
</style>
<body>
    <div class="judul">
        <h1>Welend</h1>
        <h2>Peminjaman menjadi <br> lebih mudah</h2>
    </div>
    <div class="img1" action="" method="post">
    <img>
    </div>
<form class="form1" action="" method="post">
        <div class="botak">
            <img src="img/user-icon.png">
        <h4>Silahkan Login <br>Terlebih dahulu</h4></div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="admin@smkwikrama/student@wikrama">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="wikrama">
  </div> <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <div class="p">
  <p>Hubungi CS jika bermasalah &nbsp<a href="contactCS.php">CS</a></p>
  </div>
</form>
</body>
</html>
