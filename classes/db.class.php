<?php
	class DB{
		private $dbservername = "localhost:3306";
		private $dbusername = "root";
		private $dbpassword = "letmecode";
		private $dbname = "avdril";

		protected function connect(){
			$conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
			if($conn->connect_error){
				echo 'connection error';
				die();
			}
			return $conn;
		}
		public function printer($value){
			echo "<pre>" , print_r($value, true) , "</pre>";
		}
	}
?>
