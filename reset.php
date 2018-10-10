<?php
session_start();
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

$del="TRUNCATE TABLE paper;";
$del.="TRUNCATE TABLE keywords;";
$del.="TRUNCATE TABLE Conference;";
$del.="TRUNCATE TABLE source;";
$del.="TRUNCATE TABLE written_by;";
$del.="TRUNCATE TABLE es_idlist;";

$result=$link->multi_query($del);
if($result)
    echo "success";
