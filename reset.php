<?php
session_start();
require_once 'init.php';
$user = 'root';
$password = 'root';
$db = 'PMS';
$host = 'localhost';
$port = 3306;

//MongoDB
/*
$mclient = new MongoDB\Client;
$pmsdb = $mclient->selectDatabase('PMS');
$pmsdb->dropDatabase();
$mclient->create("PMS");
*/

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
$del.="TRUNCATE TABLE conference;";
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