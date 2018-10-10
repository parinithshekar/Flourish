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

if($success) {
	$auth_id = (int)($_POST['auth_id']);
	$passwd = $_POST['password'];
	$sql = "SELECT Password FROM Login WHERE Author_ID=$auth_id";
	$result = $link->query($sql);
	if($result===null) {
		echo "NULL";
	}
	else {
		$row = $result->fetch_assoc();
		if($row["Password"]===$passwd) {
			$_SESSION["Author_ID"] = $auth_id;
			$sq = "SELECT FName,MName,LName FROM Author WHERE Author_ID=$auth_id";
			$res = $link->query($sq);
			$ro=$res->fetch_assoc();
			$_SESSION["FName"] = $ro["FName"];
			$_SESSION["MName"] = $ro["MName"];
			$_SESSION["LName"] = $ro["LName"];
            $_SESSION["Admin"] = false;
            
            $checkAdmin = "SELECT Author_ID FROM admins WHERE Author_ID=$auth_id";
            $adminResult = $link->query($checkAdmin);
            if($adminResult!==NULL)
            {
            $adminRow = $adminResult->fetch_assoc();
            //echo var_dump($adminRow);
            if((int)$adminRow["Author_ID"]===$auth_id)
                $_SESSION["Admin"] = true;
            }
            //echo $_SESSION["Ad"];
            
            header("Location:home.php");
            }
		
        else{
			header("Location:index.php");
		}
	}
}

?>