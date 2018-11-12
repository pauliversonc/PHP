<?php

if (isset($_POST['submit'])) {
	

	include_once 'dbh.inc.php';
	

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$mname = mysqli_real_escape_string($conn, $_POST['mname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwdchk = mysqli_real_escape_string($conn, $_POST['pwdchk']);
	$trybday = mysqli_real_escape_string($conn, $_POST['bday']);
	$sex = mysqli_real_escape_string($conn, $_POST['sex']);
	$type = mysqli_real_escape_string($conn, $_POST['type']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);

	
	
	//Error Handlers
	//Check for empty cubrid_field_seek(result)
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please Fillup all the blank')
    window.location.href='http://localhost/Taravel/signup.php';
    </SCRIPT>");

		exit();
		
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-z A-Z]+$/", $first) || !preg_match("/^[a-z A-Z]+$/", $last)) {
			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Input!')
    window.location.href='http://localhost/Taravel/signup.php';
    </SCRIPT>");

			exit();
		}else {
		//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid E-mail address!')
    window.location.href='http://localhost/Taravel/signup.php';
    </SCRIPT>");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid ='$uid' ";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Username is already taken!')
    window.location.href='http://localhost/Taravel/signup.php';
    </SCRIPT>");
				exit();
				} else {

					if ( strlen($pwd) >= 8 && strlen($pwd) <= 16 ) {
		if ( preg_match("#[0-9]+#", $pwd) ) {
			if ( preg_match("#[a-z]+#", $pwd) ) {
				if ( preg_match("#[A-Z]+#", $pwd) ) {
					if ( preg_match("#[A-Z]+#", $pwd) ) {
						if ( preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $pwd) ) {
							if ($pwd = $pwdchk) {

					//Hashing password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql1 = "INSERT INTO account_credentials (account_email, account_username, account_password, account_timestamp) 
					VALUES ('$email', '$uid', '$hashedPwd', CURRENT_TIME());";
					$result = mysqli_query($conn, $sql1);

					$sql2 = "INSERT INTO account_information (account_firstname, account_lastname, account_middlename, account_gender, account_birthdate,account_address) 
					VALUES ('$first', '$last', '$mname', '$sex', '$trybday','$address');";
					$result = mysqli_query($conn, $sql2);

					$sql3 = "INSERT INTO account_type (account_type_r) 
					VALUES ('$type');";
					$result = mysqli_query($conn, $sql3);




					echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Signup Success!')
   					 window.location.href='http://localhost/taravel/continue-to.php';
    				</SCRIPT>");
					exit();
								}
						} else {
						}
					}
				}
			}
		}
	}	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Password must Have Letters, Numbers and Symbols')
    window.location.href='http://localhost/Taravel/signup.php';
    </SCRIPT>");
}





					}
				}

			}
		}


 else {
	header("Location: ../signup.php");
	exit();
}