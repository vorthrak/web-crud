<?php
 require_once('koneksi.php');
	$user  = '<username>';
	$pass = '<password>';
	try {
		// buat koneksi dengan database
		$koneksi = new PDO('mysql:host=<enpoint database>;dbname=<nama database>;',$user,$pass);
		// set error mode
		$koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}catch (PDOException $e) {
		// tampilkan pesan kesalahan jika koneksi gagal
		print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
		die();
	}
	
?>
