<?php
session_start();
require_once 'init.php';

$mclient = new MongoDB\Client;

$pmsdb = $mclient->selectDatabase('PMS');
$bucket = $pmsdb->selectGridFSBucket();
$fileID = new MongoDB\BSON\ObjectId($_GET['objid']);
//$saveName = "/Users/parinith/Downloads/".$_GET['pname'];
//$file = fopen($saveName, 'wb');
//$bucket->downloadToStream($fileID, $file);

$stream = $bucket->openDownloadStream($fileID);
//echo $dStream->readAll();

$file = stream_get_contents($stream);
//echo var_dump(unpack("N1length/A3signature/C1cr/C1lf",$file));
//var_dump($stream->readAll());
//$file = $stream->getGridFSFile();
//$file = 'monkey.gif';
//$file = $stream;

$file1 = $bucket->findOne(array('_id' => $fileID));
//$file = $file1->getBytes();
$filename = $file1['filename'];
//echo var_dump($filename);

header('Content-Description: File Transfer');
header("Content-Transfer-Encoding: binary");
header("Content-disposition: attachment; filename=".basename($filename));
//header('Content-Type:application-x/force-download'); 

header('Content-Type: application/octet-stream');
echo $file;


//echo $file->getBytes();

/*
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
*/
//echo("done");
?>
