<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	include "../class/produksi.php";
	
	$d1 = new database();
	$db = $d1->koneksidatabase();
	
	$StokBarang = new barang();
	$StokBarang->setConnection($db);
	$StokBarang->StokBarang();
	$DataStok = $StokBarang->StokBarang();
	
?>