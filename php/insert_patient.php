<?php 
session_start();
include "../db_conn.php";

		function test_input($data){
			$data = trim ($data);
			$data = stripslashes ($data);
			$data = htmlspecialchars ($data);
			return $data;
		}

		$fname = str_replace("'", "''",test_input ($_POST ['fname']));
		$mname = str_replace("'", "''",test_input ($_POST ['mname']));
		$lname = str_replace("'", "''",test_input ($_POST ['lname']));
		$nid = test_input ($_POST ['nid']);
		$dob = test_input ($_POST ['dob']);
		$mobile = test_input ($_POST ['mobile']);
		$hphone = test_input ($_POST ['hphone']);
		$email = test_input ($_POST ['email']);
		$mode = test_input ($_POST str_replace("'", "''",test_input ($_POST ['mode']));
		$nok_fname = str_replace("'", "''",test_input ($_POST ['nok_fname']));
		$nok_lname = str_replace("'", "''",test_input ($_POST ['nok_lname']));
		$nok_mobile = test_input ($_POST ['nok_mobile']);
		$registration_date=date('Y-m-d');


			$sql = "INSERT INTO patient (patient_fname, patient_mname, patient_lname, patient_nid, patient_dob, patient_mobile, patient_home_phone, patient_email, patient_modeofpayment, patient_nok_fname, patient_nok_lname, patient_nok_mobile, patient_reg_date ) VALUES ('$fname', '$mname', '$lname', '$nid', '$dob', '$mobile', '$hphone', '$email', '$mode', '$nok_fname', '$nok_lname', '$nok_mobile', '$registration_date') ";

			//$result = mysqli_query ($conn, $sql);

			if ($conn->query($sql) === TRUE) 
			{
		  		echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
				<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				<h4><i class="icon fa fa-check"></i>Success!</h4>
				</div>';
			} 
			else 
			{
		  		echo "Error: " . $sql . "<br>" . $conn->error;
			}					

?>