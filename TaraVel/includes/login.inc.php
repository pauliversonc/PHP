<?php
session_start();

if (isset ($_POST['submit'])){
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check if inputs are empty

	if (empty($uid) || empty($pwd)) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please fillup the blanks!')
    window.location.href='http://localhost/Taravel/login.php';
    </SCRIPT>");
		exit();

	} else {
		$sql = "SELECT * FROM account_credentials WHERE account_username='$uid' OR account_email ='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Username or password')
    window.location.href='http://localhost/Taravel/login.php';
    </SCRIPT>");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//Dehashing password
				$hashedPwdCheck = password_verify($pwd ,$row['account_password']);
				//echo = $row['user_uid'];
				if ($hashedPwdCheck == false) {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Input Username and Password')
    window.location.href='http://localhost/Taravel/login.php';
    </SCRIPT>");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Login User the user here
					$_SESSION ['u_id'] = $row['account_username'];
					$_SESSION ['u_first'] = $row['account_firstname'];
					$_SESSION ['u_last'] = $row['account_lastname'];
					$_SESSION ['u_email'] = $row['account_email'];
				

					header("Location: ../index.php?login=success");
					exit();


				}
			}
		}
	}
} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Eror')
    window.location.href='http://localhost/Taravel/login.php';
    </SCRIPT>");
	exit();
	
}