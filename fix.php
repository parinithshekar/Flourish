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

/*
$params=[
    'index'=>'index',
    'type' =>'details',
    'body' =>
    [
        'query'=>[
            'bool'=>[
            'should'=>[
                
            'multi_match'=>[
                'query'=>[''],
                'fields'=>['title','abstract','keywords','journal','authors','eid']
            ]
            //'match' =>['title'=>$_POST['search']],
            //'match' =>['abstract'=>$_POST['search']],
            //'match' =>['keywords'=>$_POST['search']],
            //'match' =>['journal'=>$_POST['search']]
            ]
        ]
    ]
]   
];

*/
	$params = [
    "scroll" => "30s",          // how long between scroll requests. should be small!
    "size" => 50,               // how many results *per shard* you want back
    "index" => "index",
    "body" => [
        "query" => [
            "match_all" => new \stdClass()
        ]
    ]
];


$response=$client->search($params);
$result=$response['hits']['hits'];
foreach($result as $key=>$r)
	{//echo var_dump($r);
		//echo var_dump($r['_source']['keywords']);
		$kws=explode(',',$r['_source']['keywords']);
		//echo var_dump($kws);
		$eid=$r['_source']['eid'];
	/*foreach($kws as $k)
	 {
	 	echo $eid."   ".$k."<br>";
	 	$sqlKeywords = "INSERT INTO Keywords(EID, Word) VALUES('$eid', '$k');";
	 	$link->query($sqlKeywords);
		}*/

	//var_dump($r['_source']['authors'])."<br>";
	foreach($r['_source']['authors'] as $key=>$a)
	{	
		$names=explode(' ',$a);
		//echo $names[1]."     ";
		//echo ($names[0])."  ".($names[2])."<br>";
		$sqlID="SELECT * FROM Author WHERE FName='$names[0]' AND LName='$names[3]'";
		//echo $sqlID."<br>";
		$idres=$link->query($sqlID);
		$idval=$idres->fetch_assoc();
		$aid=$idval['Author_ID'];
		$sqlnth="INSERT INTO Written_By VALUES($key+1,'$aid','$eid')";
		$link->query($sqlnth);
		//echo var_dump($idval['Author_ID'])."<br>";
		

	}
}

//echo var_dump($params);
echo "<br>"."some";
?>