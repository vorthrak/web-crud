<?php
require_once('koneksi.php');
	// untuk Hapus data barang berdasarkan id barang
	$id = $_GET['id'];
	$sql = "DELETE FROM <nama table> WHERE id_barang= ?";
	$row = $koneksi->prepare($sql);
	$row->execute(array($id));
	
	echo '<script>alert("Berhasil Hapus Data");window.location="index.php"</script>';
?>
