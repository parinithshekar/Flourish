<?php
session_start();
require_once 'init.php';
//require "vendor/autoload.php";
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


//MongoDB Connection


$mongoClient = new MongoDB\Client;
//echo "Client obtained"."<br>";
$dbname = 'PMS';
$db = $mongoClient->selectDatabase($dbname);
//echo "DB obtained"."<br>";
$bucket = $db->selectGridFSBucket();
//echo "Bucket obtained"."<br>";


//FILE
$fileName = $_FILES['paper_file']['name'];
$fileSize = $_FILES['paper_file']['size'];
$fileTmpName  = $_FILES['paper_file']['tmp_name'];
$fileType = $_FILES['paper_file']['type'];
$fileExtension = strtolower(end(explode('.',$fileName)));
$objectID = null;
//echo "File Info obtained"."<br>";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['pdf', 'docx', 'doc', 'pages']; // Get all the file extensions


var_dump($_FILES);
//MongoDB File upload
if ($fileName!==null) {
    //echo "File Non Null"."<br>";

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a [PDF/DOCX/DOC/PAGES] file";
    }

    if (empty($errors)) {
        //$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $foo = fopen($fileTmpName, 'r');
        //echo "Foo obtained"."<br>";
        $objectID = (string)$bucket->uploadFromStream($fileName, $foo);
        //echo "Foo uploaded"."<br>";
        var_dump($objectID);

        if ($objectID!==null) {
            echo "The file " . basename($fileName) . " has been uploaded"."<br>";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin"."<br>";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n"."<br>";
        }
    }
}


//PAPER INFO
$title = formatData($_POST["title"]);
$abstract = formatData($_POST["abstract"]);
$keywords = formatData($_POST["keywords"]);
$eid = formatData($_POST["eid"]);
$doi = formatData($_POST["doi"]);


//JOURNAL INFO
$source = $_POST["source"];
if($source==="13") {
	$source = "Journal";
}
else {
	$source = "Conference";
}

$name = formatData($_POST["name"]);
$volume = formatData($_POST["volume"]);
$issue = formatData($_POST["issue"]);
$impactfactor = formatData($_POST["impactfactor"]);
$citescore = formatData($_POST["citescore"]);
$date = $_POST["date"];
$issn = formatData($_POST["issn"]);
$isbn = formatData($_POST["isbn"]);
$location = formatData($_POST["location"]);
$aname="";

//Paper Query
$sqlPaper = "INSERT INTO Paper (EID, Title, Abstract, DOI_Number, ISBN, Object_ID) VALUES ('$eid', '$title', '$abstract', '$doi', '$isbn', '$objectID')";
if ($link->query($sqlPaper) === TRUE) {
    echo "Paper records created successfully"."<br>";
} else {
    echo "Error: " . $sqlPaper . "<br>" . $link->error."<br>";
}
do {
    $result = mysqli_use_result($link);
    mysqli_free_result($result);
} while(mysqli_next_result());


//Source Query
$sqlSource = "INSERT INTO Source(ISBN, ISSN, Volume, Issue_Number, Name, Impact_Factor, Cite_Score, Date_Publ) VALUES ('$isbn', '$issn', '$volume', '$issue', '$name', $impactfactor, $citescore, '$date')";
if ($link->query($sqlSource) === TRUE) {
    echo "Source records created successfully"."<br>";
} else {
    echo "Error: " . $sqlSource . "<br>" . $link->error."<br>";
}
do {
    $result = mysqli_use_result($link);
    mysqli_free_result($result);
} while(mysqli_next_result());

//Conference Query
if($source==="Conference") {
	$sqlConference = "INSERT INTO Conference (ISBN, Location) VALUES('$isbn', '$location')";
	if ($link->query($sqlConference) === TRUE) {
    echo "Conference records created successfully"."<br>";
	} else {
    echo "Error: " . $sqlConference . "<br>" . $link->error."<br>";
	}
}
do {
    $result = mysqli_use_result($link);
    mysqli_free_result($result);
} while(mysqli_next_result());

//AUTHORS INFO
$authid1 = $_POST["authid1"];
$sqlAuth = "INSERT INTO Written_By(Nth_Author, Author_ID, EID) VALUES (1, $authid1, '$eid');";
$esAuthName="SELECT FName,LName FROM author WHERE Author_ID=$authid1";
$es_res=$link->query($esAuthName);
$es_row=$es_res->fetch_assoc();
$aname= $es_row['FName']."  ".$es_row['LName'];
$authid2 = $_POST["authid2"];
if($authid2!=="") {
	$sqlAuth .= "INSERT INTO Written_By(Nth_Author, Author_ID, EID) VALUES (2, $authid2, '$eid');";
    $esAuthName="SELECT FName,LName FROM author WHERE Author_ID='$authid2'";
    $es_res=$link->query($esAuthName);
    $es_row=$es_res->fetch_assoc();
    $aname.= ",".$es_row['FName']."  ".$es_row['LName'];
       
}

$authid3 = $_POST["authid3"];
if($authid3!=="") {
	$sqlAuth .= "INSERT INTO Written_By(Nth_Author, Author_ID, EID) VALUES (3, $authid3, '$eid');";
    $esAuthName="SELECT FName,LName FROM author WHERE Author_ID='$authid3'";
    $es_res=$link->query($esAuthName);
    $es_row=$es_res->fetch_assoc();
    $aname.= ",".$es_row['FName']."  ".$es_row['LName'];
}

$authid4 = $_POST["authid4"];
if($authid4!=="") {
	$sqlAuth .= "INSERT INTO Written_By(Nth_Author, Author_ID, EID) VALUES (4, $authid4, '$eid');";
    $esAuthName="SELECT FName,LName FROM author WHERE Author_ID='$authid4'";
    //echo "<br>bbc".$authid4."bb";
    $es_res=$link->query($esAuthName);
    $es_row=$es_res->fetch_assoc();
    $aname.= ",".$es_row['FName']."  ".$es_row['LName'];
}

$authid5 = $_POST["authid5"];
if($authid5!=="") {
	$sqlAuth .= "INSERT INTO Written_By(Nth_Author, Author_ID, EID) VALUES (5, $authid5, '$eid');";
    $esAuthName="SELECT FName,LName FROM author WHERE Author_ID='$authid5'";
    $es_res=$link->query($esAuthName);
    $es_row=$es_res->fetch_assoc();
    $aname.= ",".$es_row['FName']."  ".$es_row['LName'];
}

if ($result=($link->multi_query($sqlAuth)) === TRUE) {
    echo "Author records created successfully"."<br>";

    mysqli_close($link);
    $link = mysqli_init();
	$success = mysqli_real_connect(
   		$link,
   		$host,
   		$user,
   		$password,
   		$db,
   		$port
	);
    /*
    do {
    	if($result = mysqli_store_result($link)) {
    		mysqli_free_result($result);
    	}
	} while(mysqli_next_result());
	*/

} else {
    echo "Error: " . $sqlAuth . "<br>" . $link->error."<br>";
}



$keywords = preg_replace('/\s+/', '', $keywords);
$array = explode(',', $keywords);
$sqlKeywords = "";
for($i=0; $i<count($array); $i++) {
	$sqlKeywords .= "INSERT INTO Keywords(EID, Word) VALUES('$eid', '$array[$i]');";
}
if ($link->multi_query($sqlKeywords) === TRUE) {
    echo "Keywords records created successfully"."<br>";

    mysqli_close($link);
    $link = mysqli_init();
	$success = mysqli_real_connect(
   		$link,
   		$host,
   		$user,
   		$password,
   		$db,
   		$port
	);
    /*
    do {
    	if($result = mysqli_store_result($link)) {
    		mysqli_free_result($result);
    	}
	} while(mysqli_next_result());
	*/

} else {
    echo "Error: " . $sqlKeywords . "<br>" . $link->error."<br>";
}



function formatData($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//if($success)
    //echo "connection still open";

//echo $aname;
$alist=explode(',',$aname);
//echo "<br>";
//echo "<br>";
//echo var_dump($alist);

$params = [
    'index'=>'index',
    'type'=>'details',
    'body'=>[
            'keywords'=>$keywords,
            'abstract'=>$abstract,
            'title'   =>$title,
            'journal' =>$name,
            'authors' =>$alist     
    ]  
];
$response = $client->index($params);
if($response)
{   //echo "<br>"."indexed";
    $json_id=$response["_id"];
    //echo var_dump($json_id);
    $ins="INSERT INTO es_idlist(EID,ES_ID) VALUES ($eid,'$json_id')";
    $result=$link->query($ins);
    //echo var_dump($result);
    //if($result);
        //echo "Document record created sucessfully";

}
else
    echo "failed";


header("Location:home.php");
?>