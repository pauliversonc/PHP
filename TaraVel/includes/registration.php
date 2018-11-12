<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "adminpaul";
$dbName = "emailverify";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

 <form method="post" action="verification.php">
  <input type="text" name="email">
  <input type="password" name="password">
  <input type="submit" name="register" Value="Register">
 </form>

</body>
</html>