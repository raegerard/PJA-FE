<?php 
	require_once('conf-reader.php');
	
	class Database{
		private $conf_reader, $handler;
		
		function __construct(){
			$this->conf_reader = new ConfigReader();
		}
		
		public function connect(){
			$host		= $this->conf_reader->GETHOST();
			$username	= $this->conf_reader->GETUSERNAME();
			$password	= $this->conf_reader->GETPASSWORD();
			$port		= $this->conf_reader->GETPORT();
			$db_name	= $this->conf_reader->GETDBNAME();
			
			$this->handler = mysqli_connect($host, $username, $password, $db_name, $port) OR die('Error Connecting to Database');
		}
		
		public function execute($query){
			$result = mysqli_query($this->handler, $query) OR die('Error Database Query');
			return $result;
		}
		
		public function disconnect(){
			mysqli_close($this->handler);
		}
	}
?>