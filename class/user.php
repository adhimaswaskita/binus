<?php
	
	class user
	{
		private $username;
		private $password;
		//FIX : SET DB CONN VARIABLE SEBAGAI CLASS CONSTRUCTOR
		private $conn;
		function setUsername($username)
		{
			$this->username = $username;
		}
		function setPassword($password)
		{
			$this->password = $password;
		}
		//FIX : SET DB CONN VARIABLE SEBAGAI CLASS CONSTRUCTOR
		function setConnection($conn)
		{
			$this->conn = $conn;
		}

		function Authentication()
		{
			// FIX : MENGUBAH CARA QUERY MENGGUNAKAN MYSQLI
			$sql = mysqli_query($this->conn, "SELECT * FROM pegawai where username='$this->username' and password='$this->password'");

			if(mysqli_num_rows($sql) > 0){
				while ($row = mysqli_fetch_array ($sql))
				{
					$data [] = $row;
				}
				return $data;
			}
		}

		public static function cekLogin()
		{
			$logged_in = false;
			//jika session username belum dibuat, atau session username kosong
			if (!isset($_SESSION) || empty($_SESSION)) {	
				//redirect ke halaman login
				header("Location:../index.php");
			} else {
				$logged_in = true;
			}
		}

	}

?>