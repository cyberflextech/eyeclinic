<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
		<form class="border shadow p-3 rounded" action="php/login.php" method="post" style="width: 450px; background-color: white" >
			<!--<img src="img/logo.png" alt= "logo" class="center">-->
			<h1 class="text-center p-3">MOI AVENUE OUTPATIENT CENTRE</h1>
			<?php if (isset($_GET ['error'])){ ?>
				<div class="alert alert-danger" role="alert">
					<?=$_GET['error']?>
				</div>
			<?php } ?>
		  	<div class="mb-3">
		    	<label for="username" class="form-label">Username</label>
		    	<input type="text" class="form-control" name="username" id="username">
		  	</div>

		  	<div class="mb-3">
		    	<label for="password" class="form-label">Password</label>
		    	<input type="password" name="password" class="form-control" id="password">
		  	</div>

		  	<!--
		  	<div class="mb-1">
		    	<label for="class="form-label">Select User Type: </label>
		  	</div>
		  	<select class="form-select mb-3" name="role" aria-label="Default select example">
			  <option selected >Select Role</option>
			  <option value="receptionist">Receptionist</option>
			  <option value="cashier">Cashier</option>
			  <option value ="doctor">Doctor</option>
			  <option value="pharmacist">Pharmacist</option>
			  <option value="admin">Admin</option>
			</select>-->

		  	<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>

</body>
</html>