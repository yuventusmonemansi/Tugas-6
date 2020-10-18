<?php

$_server =  "localhost";
$use = "root";
$password = "aven";
$nama_database = "pendaftaran_siswa";

$db = mysql_connect($server, $user, $password, $nama_database);

if ( !$db ) {
    die ("gagal terhubung dengan database: " . mysql_connect_error());
}
?>