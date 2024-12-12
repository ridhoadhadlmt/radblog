<?php

function readData($table,$field,$kondisi=''){ 
	global $koneksi;

	$sql = "SELECT $field FROM $table $kondisi";
	$exe = mysqli_query($koneksi,$sql);
	return $exe;
}

// function recentPost($table,$field,$kondisi=''){
// 	global $koneksi;

// 	if(is_array($field)){
// 		$read = implode(",",$field);
// 	}
// 	else{
// 		$read = $field;
// 	}
// 	$sql = "SELECT $read FROM $table $kondisi ORDER BY id_post DESC LIMIT 1";
// 	$exe = mysqli_query($koneksi,$sql);
// 	return $exe;
// }

function tgl_indonesia($date){
	
	$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis","Jum'at","Sabtu");
	$Bulan = array("Januari", "Februari","Maret","April","Mei","Juni","Juli","Agustus","September",
		"Oktober","November","Desember");


	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));

	$result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." | ".$waktu." WIB";
	
	return $result;
	// $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu. " WIB";
	
	// return $result;		
}
function tgl_indonesia_2($date){
	
	$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis","Jum'at","Sabtu");
	$Bulan = array("Jan", "Feb","Mar","Apr","Mei","Juni","Juli","Agust","Sept",
		"Okt","Nov","Des");


	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	$result = " ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ";
	// $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." | ".$waktu." WIB";
	
	return $result;
	
	
	// return $result;		
}

function deletePost($table,$kondisi=''){
	global $koneksi;

	$sql = "DELETE FROM $table $kondisi";
	$exe = mysqli_query($koneksi,$sql);
	if($exe){
		header('location:index.php?blog=all_post2');
	}
	else{
		// echo $sql;
		header('location:index.php?blog=all_post2?pesan=gagal');	
	}
}

function insertPost($table,$field,$value){
	global $koneksi;

	$fieldPost = implode(",",$field);
	$valuePost = implode(",",$value);

	$sql = "INSERT INTO ".$table."(".$fieldPost.") VALUES (".$valuePost.")";
	$exe = mysqli_query($koneksi,$sql);
	if($exe){
		// echo $sql;
		header('location:index.php?blog=add_post&pesan=berhasil');
	}
	else{
		echo $sql;
		// header('location:index.php?blog=add_post&pesan=gagal');
	}
}

function updatePost($table,$coulumn,$kondisi = ''){
	global $koneksi;

	$sql ="UPDATE $table SET $coulumn $kondisi";
	$exe = mysqli_query($koneksi,$sql);
	if($exe){
		// echo "<script>alert('Berhasil Update');</script>";
		header('location:index.php?blog=all_post');
	}
	else{
		echo $sql;
		// header('location:index.php?blog=all_post&pesan=gagal');
	}
}

?>

