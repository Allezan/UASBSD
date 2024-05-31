<?php
include "service/database.php";

if(isset($_POST["submit"])){
  $nama_penerima = $_POST['nama_penerima'];
  $alamat_asal = $_POST['alamat_asal'];
  $alamat_tujuan = $_POST['alamat_tujuan'];
  $tanggal_pengiriman = $_POST['tanggal_pengiriman'];

  $sql = "INSERT INTO pengiriman (nama_penerima, alamat_asal, alamat_tujuan, tanggal_pengiriman) VALUES ('$nama_penerima', '$alamat_asal','$alamat_tujuan','$tanggal_pengiriman')";

  $result = mysqli_query($db, $sql);

  if($result){
    echo "<p style='color:blue;'>Input data ke database berhasil.</p>";
  }
  else{
    echo "<p style='color:red;'>Input data ke database gagal.</p>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css" />
    <title>Order</title>
</head>

<body>
    <h1 id="title">Data Pengiriman</h1>
    <div id="form-outer">
        <p id="description">
            To know the details of students
        </p>
        <form id="survey-form" method="POST" action="order.php">
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">Nama Pengirim: </label>
                </div>
                <div class="rightTab">
                    <input autofocus type="text" name="nama_pengirim" id="name" class="input-field" placeholder="Masukan nama pengirim" required>
                </div>
            </div>

            <div class="rowTab">
                <div class="labels">
                    <label id="fname-label" for="fname">Nama Penerima: </label>
                </div>
                <div class="rightTab">
                    <input autofocus type="text" name="nama_penerima" id="fname" class="input-field" placeholder="Masukan nama penerima" required>
                </div>
            </div>

            <div class="rowTab">
                <div class="labels">
                    <label id="email-label" for="email">Email: </label>
                </div>
                <div class="rightTab">
                    <input type="email" name="email" id="email" class="input-field" required placeholder="Masukan Email pengirim">
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="number-label" for="age">Umur: </label>
                </div>
                <div class="rightTab">
                    <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Umur" required>
                </div>
            </div>

            <div class="rowTab">
                <div class="labels">
                    <label id="dob-label" for="dob">Tanggal Pengiriman: </label>
                </div>
                <div class="rightTab">
                    <input type="date" name="tanggal_pengiriman" id="iddob" class="input-field" required>
                </div>
            </div>

            <div class="rowTab">
                <div class="labels">
                    <label for="gender">Gender: </label>
                </div>
                <div class="rightTab">
                    <ul style="list-style: none;">
                        <li class="radio"><label><input name="radio-buttons" value="male" type="radio" class="userRatings">Male</label></li>
                        <li class="radio"><label><input name="radio-buttons" value="female" type="radio" class="userRatings">Female</label></li>
                        <li class="radio"><label><input name="radio-buttons" value="others" type="radio" class="userRatings">Others</label></li>
                    </ul>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="address">Alamat Pengirim: </label>
                </div>
                <div class="rightTab">
                    <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="alamat_asal" placeholder="Enter your address here..."></textarea>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="address">Alamat Penerima: </label>
                </div>
                <div class="rightTab">
                    <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="alamat_tujuan" placeholder="Enter your address here..."></textarea>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="pincode">Kode Pos: </label>
                </div>
                <div class="rightTab">
                    <input type="number" name="pincode" id="idpincode" class="input-field" style="height:20px;resize:vertical;" placeholder="6 - - - - -">
                </div>
            </div>

            <button id="submit" class="submit" align="center" name="submit">Submit</button>
            <button id="reset" type="reset">Reset</button>
        </form>
    </div>
</body>

</html>