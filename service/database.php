<?php
$namahost = "localhost";
$user = "root";
$pass = "";
$namadb = "db_data";

$db = mysqli_connect($namahost, $user, $pass, $namadb);
if ($db->connect_error){
    echo "coba lagi bang~";
    die("mati!");
} // echo "Berhasil!";
?>