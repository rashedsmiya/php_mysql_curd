<?php 

	class Database {

		private $servername;
		private $username;
		private $password;
		private $dbname;
	}

	protected function connect() 
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "php_oop"; 

		$conn = new mysqli(
			$this->servername,
			$this->username,
			$this->password,
			$this->dbname, 
		);

		return $conn;
	}


	## class to perform sql queries

	class Query extends Database{

		public function getDate(){
			
			$sql = "select * from users";
			
		    $result = $this->connect()->query($sql);

		}
	}