<?php
	include "../class/config.php";
	include "../class/pemesanan.php";
	
	if(isset($_POST['update']));
	{	
	
		$d1 = new database();
		$db = $d1->koneksidatabase();
	
		$PakaiBarangUpdate = new pemesanan();
		
		$PakaiBarangUpdate = new pemesanan();
		$PakaiBarangUpdate->setId_Pesanan($_POST['id_pesanan']);
		
		$PakaiBarangUpdate->setPakai($_POST['pakai']);
		
		$PakaiBarangUpdate->PakaiBarangUpdate();
		
		header ("location:pesanan.php");
	}
	
?>