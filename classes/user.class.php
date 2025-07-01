<?php
	class User extends DB{
		public function get_user($email = ""){
			if($email == ""){
				$sql = "SELECT * FROM users";
			} else {
				$sql = "SELECT * FROM users WHERE email='$email'";
			}
			$stmt = $this->connect()->query($sql);
			return $stmt;
		}
		
		public function insert_user($username, $email, $password, $repassword, $marketer=''){
			$conn = $this->connect();

			$sql = "SELECT * FROM users ";
			$q = $conn->query($sql);
			$admin = $q->num_rows == 0 ? 1 : 0; // If no user exists, set admin to 1, else set to 0

			$errors = array();

			if(empty($username)){
				array_push($errors, 'Empty feild');
			}else if(empty($email)){
				array_push($errors, 'Empty feild');
			}else if(empty($password)){
				array_push($errors, 'Empty feild');
			}else if(empty($repassword)){
				array_push($errors, 'Empty feild');
			}

			$exitsUser = $this->get_user($email);
			if(mysqli_num_rows($exitsUser) != 0){
				array_push($errors, 'This email is taken');
			}
			if($password != $repassword){
				array_push($errors, 'Passwords did not match');
			}
			if(empty($errors)){
				$sql = "INSERT INTO users (username, email, `password`, `admin`, marketer) VALUES (?, ?, ?, ?, ?);";
				$stmt = $conn->prepare($sql);
				$password = password_hash($password, PASSWORD_DEFAULT);
				$marketer = trim($marketer == '') ? NULL : $marketer;
				$stmt->bind_param("sssis", $username, $email, $password, $admin, $marketer);
				$stmt->execute();
			}
			$_SESSION['sign_message'] = $errors[0];
			if(empty($errors)){
				$_SESSION['sign_message'] = "Account created successfully";
			}
			unset($_SESSION['log_message']);
			return $errors;
		}
		public function login($POST){
			$errors = array();

			if(empty($_POST['email']) & empty($_POST['password'])){
				array_push($errors, 'Email and password is required');
			}else if(empty($_POST['email'])){
				array_push($errors, 'Email is required');
			}else if(empty($_POST['password'])){
				array_push($errors, 'Password is required');
			}
			$exitsUser = $this->get_user($_POST['email']);

			if(mysqli_num_rows($exitsUser) === 0){
				array_push($errors, 'Invalid email or password');
			}else{
				$row = $exitsUser->fetch_assoc();
				$password = $row['password'];
			}
			if(!password_verify($_POST['password'], $password)){
				array_push($errors, 'Invalid email or password');
			}
			$_SESSION['log_message'] = $errors[0];
			unset($_SESSION['sign_message']);
			return $errors;
		}
		public function delete_user($id){
			$conn = $this->connect();
			$sql = "DELETE FROM users WHERE id=?;";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("i", $id);
			$stmt->execute();
		}
	}
?>
