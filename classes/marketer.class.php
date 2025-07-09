<?php
	class Marketer extends DB{
		public function get_marketer($id=""){
			if($id == ""){
				$sql = "SELECT * FROM marketers;";
			} else {
				$sql = "SELECT * FROM marketers WHERE id='$id';";
			}
			$stmt = $this->connect()->query($sql);
			return $stmt;
		}

		public function get_marketer_clients($id=""){
			$sql = "SELECT * FROM users WHERE marketer ='$id';";
			$stmt = $this->connect()->query($sql);
			return $stmt;
		}

		public function upsertMarketer($name, $email, $showing, $id=""){
			if($id == ""){
				$id = uniqid();
				$sql = "INSERT INTO `marketers` (id,`name`,`email`,`showing`) VALUES (?, ?, ?, ?);";
				$conn = $this->connect();
				$stmt = $conn->prepare($sql);
				$stmt->bind_param('ssss',$id, $name, $email, $showing);
			} else {
				$sql = "UPDATE `marketers` SET `name`=?, `email`=?, `showing`=? WHERE id=?;";
				$conn = $this->connect();
				$stmt = $conn->prepare($sql);
				$stmt->bind_param('ssss', $name, $email, $showing, $id);
			}
			$stmt->execute();
		}
		public function marketer_visibality($id){
			$con = $this->connect();
			$selected_stroy = $this->get_marketer($id);
			$row = $selected_stroy->fetch_assoc();
			if($row['showing'] == 1){
				$sql = "UPDATE `marketer` SET `showing`=0 WHERE `id`='$id';";
			} else {
				$sql = "UPDATE `marketer` SET `showing`=1 WHERE `id`='$id';";
			}
			$con->query($sql);
		}
		public function delete_marketer($id){
			$con = $this->connect();
			$sql = "DELETE FROM `marketer` WHERE `id`='$id';";
			$con->query($sql);
		}
	}
