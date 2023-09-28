<?php 
session_start();
include "../db_conn.php";

	if (isset($_POST['username']) && isset($_POST['password'])) {

		function test_input($data){
			$data = trim ($data);
			$data = stripslashes ($data);
			$data = htmlspecialchars ($data);
			return $data;
		}

		$username = test_input (strtolower($_POST ['username']));
		$password = test_input ($_POST ['password']);

		if (empty($username)){
			header ("Location: ../index.php?error=Username is required!");
		} else if (empty($password)){
			header ("Location: ../index.php?error=Password is required!");
		} else {
			$password=md5($password);

			$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query ($conn, $sql);

			if (mysqli_num_rows($result)===1) {
				$row = mysqli_fetch_assoc($result);
				if (strtolower($row['username']) ===$username && $row['password'] ===$password) {
					$_SESSION['name']=$row['name'];
					$_SESSION['id']=$row['id'];
					$_SESSION['role']=$row['role'];
					$_SESSION['username']=$row['username'];
				}
					if (isset($_SESSION['role'])=='admin')
					{
						header("Location: ../admin.php");
					} else if (isset($_SESSION['role'])=='receptionist'){
						header("Location: ../reception.php");
					} else if (isset($_SESSION['role'])=='cashier'){
						header("Location: ../cashier/cashier_home.php");
					} else if (isset($_SESSION['role'])=='doctor'){
						header("Location: ../doctor/doctor_home.php");
					} else if (isset($_SESSION['role'])=='pharmacist'){
						header("Location: ../pharmacy/pharmacy_home.php");
					} else {
						header ("Location: ../index.php?error=Incorrect Username or Password!");
						}
					
					} 
				else{
				header ("Location: ../index.php?error=Incorrect Username or Password!");
			}
		}

	} else {
		header("Location: ../index.php");
	}