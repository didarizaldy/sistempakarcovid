<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sispak_covid';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('koneksi gagal');
