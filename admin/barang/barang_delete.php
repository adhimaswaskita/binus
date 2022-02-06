<?php
	include "../../class/config.php";
	include "../../class/barang.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$db = $d1->koneksidatabase();
		
		$BarangDelete = new barang();
		$BarangDelete->setConnection($db);
		$BarangDelete->BarangDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>