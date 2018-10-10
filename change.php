<?php
session_start();


$user = 'root';
$password = 'root';
$db = 'PMS';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);


$Auth_ID=$_SESSION["Author_ID"];
$oldpwd=$_POST["oldpassword"];
$newpwd=$_POST["newpassword"];
$confpwd=$_POST["conpassword"];

if($newpwd===$confpwd)
{	
	$sql = "SELECT Password FROM Login WHERE Author_ID=$Auth_ID";
	$result = $link->query($sql);
	if($result===null)
	{
		echo "NULL";
	}
	
	else {
		$row = $result->fetch_assoc();
		if($row["Password"]===$oldpwd)			
		{	
			$upd="UPDATE Login SET Password='$newpwd' WHERE Author_ID=$Auth_ID ";
			$result1=$link->query($upd);
			header("Location:home.php");

			
		}
		else{
			header("Location:pwdreset.php");
		}
}
}
else{
	
	header("Location:pwdreset.php");
}
?>