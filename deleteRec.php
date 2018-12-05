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
$EID=$_POST["EID"];
$del="DELETE FROM paper WHERE eid='$EID';";
$del.="TRUNCATE TABLE keywords;";
$del.="TRUNCATE TABLE source;";
$del.="TRUNCATE TABLE written_by;";
$del.="TRUNCATE TABLE es_idlist;";

$result=$link->multi_query($del);
if($result)
    echo "success1";

$param=[
    'index' =>'index'
];

$response= $client->indices()->delete($param);
echo var_dump($response);
if($response)
    echo 'success';