<?php

require "vendor/autoload.php";

$client = new MongoDB\Client;

$pmsdb = $client->selectDatabase('PMS');
$bucket = $pmsdb->selectGridFSBucket();


//Store a file
//$stream = $bucket->openUploadStream('Parinith_CV.pages');

//$file = fopen('from/Parinith_CV.pages', 'rb');
//$fileID = new MongoDB\BSON\ObjectId("5bb504804739871e330d4433");
//$options = ['_id' => '5bb504804739871e330d4433'];
//$metadata = ['eid' => '123'];
//$options = ['metadata' => $metadata];
//$id = $bucket->uploadFromStream('Parinith_CV.pages', $file);
//var_dump((string)$id);
//var_dump($file);


//Download file all at once
/*
$fileID = new MongoDB\BSON\ObjectId("5bb6415f4739871e3e085976");
$saveName = //Dunno how you'll get but take care extension
$file = fopen($saveName, 'wb');
$bucket->downloadToStream($fileID, $file);
*/

/*
//Delete a file
$fileID = new MongoDB\BSON\ObjectId("5bb504804739871e330d4433");
$bucket->delete($fileID);
*/



//Find file metadata
//$cursor = $bucket->find(['metadata'=>['eid'=>'123']]);

//$fileID = new MongoDB\BSON\ObjectId("5bb504804739871e330d4433");
//$cman = $fileID.toString();
//var_dump((string)$fileID);
//$stream = $bucket->openDownloadStreamByName

echo("<br>"."aithu"."<br>");
?>