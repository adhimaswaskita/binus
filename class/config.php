<?php
	class database
	{
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "eoq";
		
		function koneksidatabase()
		{
			// FIX : MENGUBAH CARA KONEKSI MENGGUNAKAN MYSQLI_CONNECT
			$conn = mysqli_connect($this->server, $this->username, $this->password, $this->database, 3306);
			return $conn;
		}
	}
	$d1 = new database();
	$db = $d1->koneksidatabase();
	

?>