<?php 
	ob_start();
	session_start(); 
?>
<?php
include "./db_connnection.php";
$conn = OpenCon();
$username=$_POST['username-login'];
$password=$_POST['pass-login'];
$permission = $_POST['permission-login'];
$username= str_replace  ("'", "\'", $username);
$username= str_replace  ('"', '\"', $username);
$username= str_replace  (';', '\;', $username);
$password= str_replace  ("'", "\'", $password);
$password= str_replace  ('"', '\"', $password);
$password= str_replace  (';', '\;', $password);
$permission= str_replace  ("'", "\'", $permission);
$permission= str_replace  ('"', '\"', $permission);
$permission= str_replace  (';', '\;', $permission);
var_dump($permission,$username,$password);
$sqladmin="SELECT * FROM account WHERE user = '$username' AND password = '$password' AND permission ='$permission'";
$queryadmin= $conn->query($sqladmin);
if (mysqli_num_rows($queryadmin) > 0) 	
	{	
		$_SESSION["user"] = $permission;
		if($permission=='user'){
			header('Location: ./index.php?go=home');
		}else{
		if($permission=='admin'){
			header("Location: ./index_admin.php?go=home");
		}else{
			header('Location: ./index.php?go=home');
		}
		}
	}
else
	{
		header('Location: ./index.php?go=home');
	}
CloseCon($conn);
?>