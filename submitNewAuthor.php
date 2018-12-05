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
    $authid = $_POST['authid'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $passwd = $_POST['password'];
    
    $sql = "INSERT INTO Author (Author_ID, FName, MName, LName) VALUES ('$authid', '$fname', '$mname', '$lname');";
    $sql .= "INSERT INTO Login (Author_ID, Password) VALUES ('$authid', '$passwd');";
    
    if(isset($_POST['admin_privs'])) {
        $sql .= "INSERT INTO Admins (Author_ID) VALUES ('$authid')";
    }
    
    if ($link->multi_query($sql) === TRUE) {
        echo "New Author ".$fname." ".$mname." ".$lname." added with ID ".$authid."<br>";
    } else {
        echo "Error:"."<br>".$sql."<br>".$link->error."<br>";
    }
}
header("Location:home.php");

?>