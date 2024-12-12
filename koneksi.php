<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB_NAME','rad_blog');

$koneksi = mysqli_connect(HOST,USER,PASS,DB_NAME);

if($koneksi){
	// echo "Berhasil";
}

?>