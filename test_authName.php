<?php
session_start();

//To test author name retrieval from DB

require_once 'init.php';
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


//$esAuthName="SELECT FName,LName FROM author WHERE Author_ID=30";
//$esAuthMName='SELECT FName from author WHERE Auth_ID=30';
//$esAuthLName='SELECT LName from author WHERE Auth_ID=30';
//$result=$link->query($esAuthName);
//$row = $result->fetch_assoc();
$id=30;
$esAuthName="SELECT FName,LName FROM author WHERE Author_ID=$id";
$result=$link->query($esAuthName);
while($row = $result->fetch_assoc())
    $name.= $row['FName']."  ".$row['LName'].",";
$list=explode(',',$name);
echo var_dump($list);

function formatData($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
