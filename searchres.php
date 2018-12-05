<?php
session_start();
require_once 'init.php';

$params=[
    'index'=>'index',
    'type' =>'details',
    'body' =>
    [
        'query'=>[
            'bool'=>[
            'should'=>[
                
            'multi_match'=>[
                'query'=>$_POST['search'],
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

$response=$client->search($params);
$result=$response['hits']['hits'];

?>


<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
     <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:#f7f9fc;">
        <div class="container"><a class="navbar-brand" href="home.php" style="width:120px;color:#f4476b;font-size:30px;">Flourish</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav"></ul>
                <form class="form-inline mr-auto" method="post" action="searchres.php" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field" style="background-color:#cccccc;margin:13px;width:300px;"></div>
                </form>
               <?php if($_SESSION["Author_ID"]===NULL): ?> 
                <a class="btn btn-light action-button" role="button" href="index.php" style="color:#f4476b;width:132px;background-color:#f4476b;">Log In</a>
                <?php else: ?> 
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><?php echo $_SESSION["FName"]." ".$_SESSION["MName"]." ".$_SESSION["LName"]?></a></li>
                </ul>
                
                <?php if($_SESSION["Admin"]===true): ?>
                <a class="btn btn-light action-button" role="button" href="addAuthor.php" style="color:#f4476b;margin:13px;width:160px;background-color:#f4476b;">Add Author</a>
                <?php endif; ?>
                
                <a class="btn btn-light action-button" role="button" href="logout.php" style="color:#f4476b;width:132px;margin:13px;background-color:#f4476b;">Log Out</a>
                 <a class="btn btn-light action-button" role="button" href="pwdreset.php" style="color:#f4476b;margin:13px;width:160px;background-color:#f4476b;">Change Password</a>
                <?php endif; ?> 
        </div>
        </div>
    </nav>
<div>
<div class="row" style="width:1000px;height:37px;margin:15px;padding:-68px;">
    <div class="col-lg-12">
          <h2>Showing results for "<?php echo $_POST["search"]?>"</h2>
                </div>
    <?php if($response!==NULL):?>
 <div class="container">
            <div class="row" style="width:1500px;height:37px;margin:55px;padding:-68px;">
                <div class="col-md-2">
                      <h3>Paper</h3>
                </div>
                <div class="col-md-2">
                    <h3>Journal</h3>
                </div>
                <div class="col-md-3">
                      <h3>Authors</h3> 
                </div>
                 <div class="col-md-3">
                      <h2>Download link</h2>
                </div>
                <!--<div class="col-md-3">
                      <h2>Keywords</h2>
                </div>
             <!--   <div class="col-md-2">
                     <h2>Heading</h2>
                </div>-->
            </div>
        </div>
     <?php foreach($result as $r):?>
     <div class="container">
            <div class="row" style="width:1500px;height:37px;margin:55px;padding:-68px;">
                <div class="col-md-2">
                    <p> <?php echo $r[_source]['title'];?></p>
                </div>
                <div class="col-md-2">
                    <p> <?php echo $r[_source]['journal'];?></p>
                </div>
                <div class="col-md-3">
                    <?php   $i=0;
                            foreach($r[_source]['authors'] as $s)
                                {echo $s;
                                 if($i!==(count($r[_source]['authors'])-1))
                                     echo ", ";
                                 $i+=1;
                                }?> 
                </div>
                <div class="col-md-3">
                      <p> <a href= <?php echo "download.php?objid=".$r[_source]['objectID']."&pname=".$r[_source]['fileName']; ?> target="_blank"><?php echo $r[_source]['fileName']; ?> </a></p>
                </div>
                <!--<div class="col-md-3">
                      <p href="#">click here //add href to download script</p>
                </div>-->
               
             <!--   <div class="col-md-2">
                     <h2>Heading</h2>
                </div>-->
            </div>
        </div>
     <?php endforeach;?>
    
 
    </div>    
    </div>
      <?php endif;

    ?>


  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>

