<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	
	$d1 = new database();
	$db = $d1->koneksidatabase();
	
	$BarangList = new barang();
	$BarangList->setConnection($db);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$AmbilBarangList = new pengambilan();
	$AmbilBarangList->AmbilBarangList();
	$DaftarPengambilan = $AmbilBarangList->AmbilBarangList();

?>