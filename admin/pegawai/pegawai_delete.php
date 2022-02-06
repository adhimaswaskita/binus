<?php
	include "../../class/config.php";
	include "../../class/pegawai.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$db = $d1->koneksidatabase();
		
		$PegawaiDelete = new pegawai();
		$PegawaiDelete->setConnection($db);
		$PegawaiDelete->PegawaiDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>