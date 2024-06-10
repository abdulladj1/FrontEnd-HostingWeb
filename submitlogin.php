<?php
//mengaktifkan sesi
session_start();
$username = $_POST["username"];
//inisialisasi sesi
$_SESSION['namauser'] = $username;
$_SESSION['namalengkap'] = $username." ".$username;
echo "Username: $username<br>";
//panggil
echo "Name: " .$_SESSION['namauser'] ."<br>";
//mengaktifkan cookie
$sepuluhdetik = time() + 10;
setcookie("KunjunganTerakhir", date("G:i:s - m/d/Y"), $sepuluhdetik);
require('indexaddons.php');
?>