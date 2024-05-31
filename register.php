<?php
include "service/database.php";

if(isset($_POST["register"])){
  $nama_pengirim = $_POST['nama_pengirim'];
  $password = $_POST['password'];

  $sql = "INSERT INTO pengirim (nama_pengirim, password) VALUES ('$nama_pengirim', '$password')";
  $result = mysqli_query($db, $sql);
  if($result){
    header("location: login.php");
  }
  else{
    echo "gagal";
  }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="Lstyle.css">
  <title>Sign up</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign up</p>
    <form class="form1" action="register.php" method="POST">
      <input class="un " type="text" align="center" placeholder="Username" name="nama_pengirim">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <button class="submit" align="center" name="register">Sign up</button>
      <p class="forgot" align="center"><a href="login.php">Already have account? Login</p>


  </div>

</body>

</html>