<?php
session_start();
require_once 'init.php';

//$keys=explode(',',$_SESSION["kw"]);
$keys=explode(',',$_POST["words"]);
//$bodi=$_POST["bods"];
echo var_dump($keys);


$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'body' => [ 'testField' => 'abc']
];

// Document will be indexed to my_index/my_type/<autogenerated ID>
$response = $client->index($params);
if($response)
    echo var_dump($response);
else 
    echo "nothing :/"
?>
<!--
<html>

<a href="seart.php"> votto</a>
</html>
