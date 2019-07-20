<?php

$server = "192.168.64.2";
$user = "ipcc";
$password = "Makanan1%";
$nama_database = "arkademy";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>