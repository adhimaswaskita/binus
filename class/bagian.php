<?php
	class bagian
	{
		private $id_bagian;
		private $nama_bagian;
		//FIX : SET DB CONN VARIABLE SEBAGAI CLASS CONSTRUCTOR
		private $conn;

		//FIX : SET DB CONN VARIABLE SEBAGAI CLASS CONSTRUCTOR
		function setConnection($conn)
		{
			$this->conn = $conn;
		}
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}
		function setNama_Bagian ($nama_bagian)
		{
			$this->nama_bagian = $nama_bagian;
		}
		function getId_Bagian ()
		{
			return $this->id_bagian;
		}
		function getNama_Bagian ()
		{
			return $this->nama_bagian;
		}
		function AddBagian ()
		{
			$sqlAddBagian = mysqli_query($this->conn, "INSERT INTO bagian VALUES ('$this->id_bagian','$this->nama_bagian')");
		}
		function BagianList ()
		{
			$sqlBagianList = mysqli_query($this->conn, "SELECT * FROM bagian ORDER BY nama_bagian ASC");
			while ($row = mysqli_fetch_array ($sqlBagianList))
			{
				$data [] = $row;
			}
			return $data;
		}
		function findBagianById ($id)
		{
			$sqlEditBagian = mysqli_query($this->conn, "SELECT * FROM bagian WHERE id_bagian = '$id'");
			while ($row = mysqli_fetch_array ($sqlEditBagian))
			{
				$data[] = $row;
			}
			return $data;			
		}
		function BagianUpdate ()
		{
			$sqlBagianUpdate = mysqli_query($this->conn, "UPDATE bagian SET nama_bagian ='$this->nama_bagian' WHERE id_bagian = '$this->id_bagian'");
		}
		function BagianDelete ($id)
		{
			$sqlBagianDelete = mysqli_query($this->conn, "DELETE FROM bagian WHERE id_bagian = '$id'");
		}
	}


?>