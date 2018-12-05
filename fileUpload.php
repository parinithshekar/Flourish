<?php
session_start();

    require "vendor/autoload.php";

    $client = new MongoDB\Client;
    $dbname = 'PMS';
    $db = $client->selectDatabase($dbname);
    $bucket = $db->selectGridFSBucket();

    $currentDir = getcwd();
    $uploadDirectory = "/to/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['pdf']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        /*
        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }
        */

        if (empty($errors)) {
            //$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            $id = null;
            $foo = fopen($fileTmpName, 'r');
            $id = $bucket->uploadFromStream($fileName, $foo);
            var_dump((string)$id);

            if ($id!==null) {
                echo "The file " . basename($fileName) . " has been uploaded"."<br>";
                echo (string)$id;
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>