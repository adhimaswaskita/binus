<?php
	class pengambilan
	{
		private $id_pengambilan;
		private $nama_pengambil;
		private $id_produksi;
		private $id_barang;
		private $jumlah_pengambilan;
		private $conn;
		
		function setConnection($conn) {
			$this->conn = $conn;
		}
		function setId_Pengambilan ($id_pengambilan)
		{
			$this->id_pengambilan = $id_pengambilan;
		}
		function setNama_Pengambil ($nama_pengambil)
		{
			$this->nama_pengambil = $nama_pengambil;
		}
		function setId_Produksi ($id_produksi)
		{
			$this->id_produksi = $id_produksi;
		}
		function setId_Barang ($id_barang)
		{
			$this->id_barang = $id_barang;
		}
		function setjumlah_pengambilan ($jumlah_pengambilan)
		{
			$this->jumlah_pengambilan = $jumlah_pengambilan;
		}
		function getId_Pengambilan ()
		{
			return $this->id_pengambilan;
		}
		function getNama_Pengambil ()
		{
			return $this->nama_pengambil;
		}
		function getId_Produksi ()
		{
			return $this->id_produksi;
		}
		function getId_Barang ()
		{
			return $this->id_barang;
		}
		function getjumlah_pengambilan ()
		{
			return $this->jumlah_pengambilan;
		}
		function AddAmbil_Barang ()
		{
			$sqlAmbilBarang = mysqli_query ($this->conn, "INSERT INTO pengambilan VALUES ('$this->id_pengambilan', '$this->nama_pengambil',  '$this->id_barang', '$this->jumlah_pengambilan')");
		}
		function AmbilBarangList ()
		{
			$sqlAmbilBarangList = mysqli_query ($this->conn, "SELECT pengambilan.nama_pengambil, barang.nama_barang, pengambilan.jumlah_pengambilan FROM pengambilan JOIN barang ON pengambilan.id_barang = barang.id_barang");
			while ($row = mysqli_fetch_array ($sqlAmbilBarangList))
			{
				$data [] = $row;
			}
			return $data;
		}
	}
?>