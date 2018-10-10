<?php
require 'vendor/autoload.php';

$hosts=['127.0.0.1:9200'];
$client = Elasticsearch\ClientBuilder::create()->setHosts($hosts)->build();

//if($client)     //check for connection
    //echo "connected";
?>