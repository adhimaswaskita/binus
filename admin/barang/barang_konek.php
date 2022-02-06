<?php

	
// memanggil koneksi database

include "../../class/config.php";
include "../../class/barang.php";

	$d1 = new database();
	$db = $d1->koneksidatabase();
	
	$BarangList = new barang();
	$BarangList->setConnection($db);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$i=1;
		
?>