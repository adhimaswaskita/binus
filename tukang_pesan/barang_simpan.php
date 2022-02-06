<?php

// memanggil koneksi database

include "../class/config.php";
include "../class/barang.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{
		//buat objek barang
		$d1 = new database ();
		$db = $d1->koneksidatabase();
		
		$AddBarang = new barang ();
		$AddBarang->setConnection($db);
		$AddBarang->setNama_Barang($_POST["nama_barang"]);
		$AddBarang->AddBarang();
		
		header ("location:index.php");
	}
	

?>