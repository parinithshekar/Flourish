<?php
session_start();
$eid = $_POST["eid"];
$keywords = $_POST["keywords"];
$keywords = preg_replace('/\s+/', '', $keywords);
$array = explode(',', $keywords);
echo var_dump($array)."<br>";
$sqlKeywords = "";
for($i=0; $i<count($array); $i++) {
	$sqlKeywords .= "INSERT INTO Keywords(EID, Word) VALUES('$eid', '$array[$i]');";
}
echo var_dump($sqlKeywords)."<br>";
if ($link->query($sqlKeywords) === TRUE) {
    echo "Paper records created successfully"."<br>";
} else {
    echo "Error: " . $sqlKeywords . "<br>" . $link->error."<br>";
}
?>