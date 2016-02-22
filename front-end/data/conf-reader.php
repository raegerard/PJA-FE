<?php 
	class ConfigReader{
		private $file, $host, $username, $password, $port, $db_name;
		
		function __construct(){
			$this->file = 'db.ini';
			self::Read_File();
		}
		
		private function Read_File(){
			$handler = parse_ini_file($this->file, true);
			
			$this->host = $handler['database']['host'];
			$this->username = $handler['database']['username'];
			$this->password = $handler['database']['password'];
			$this->port = $handler['database']['port'];
			$this->db_name = $handler['database']['db_name'];
		}
		
		public function GetHost(){
			return $this->host;
		}
		
		public function GetUsername(){
			return $this->username;
		}
		
		public function GetPassword(){
			return $this->password;
		}
		
		public function GetPort(){
			return $this->port;
		}
		
		public function GetDBName(){
			return $this->db_name;
		}
	}
?>