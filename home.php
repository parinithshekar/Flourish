<?php
session_start();
echo $_SESSION["Admin"];

?>


<!DOCTYPE html>
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

<body style="background-image:url(&quot;assets/img/dustin-lee-19667-unsplash.jpg&quot;);background-size:cover;background-position:center;background-repeat:space;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:#f7f9fc;">
        <div class="container"><a class="navbar-brand" href="#" style="width:120px;color:#f4476b;font-size:30px;">Flourish</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <div class="highlight-clean" style="background-color:rgba(239,241,244,0.66);margin:117px;padding:89px;">
        <div class="container-fluid" style="background-size:auto;">
            <div class="intro">
                <h2 class="text-center" style="background-color:rgba(244,71,107,0);color:#222222;font-size:47px;font-family:Adamina, serif;">Got your paper published?</h2>
            </div>
           
           <?php if($_SESSION["Author_ID"]!==NULL): ?> 
            <div class="buttons"><a href="submit.php" class="btn btn-primary" role="button" href="#" style="background-color:#f4476b;padding:23px;width:180px;font-size:23px;font-family:Adamina, serif;">submit</a>
            </div>
            <?php else: ?>
            <p class="text-center" style="background-color:rgba(244,71,107,0);color:#222222;font-size:47px;font-family:Adamina, serif;"><a href="index.php">Log In to Submit</a></p>
           <?php endif; ?> 

        </div>
    </div>
      <div class="container">
            <div class="row" style="width:1500px;height:37px;margin:15px;padding:-68px;">
                <div class="col-md-2">
                    <p> <?php echo $title;?></p>
                </div>
                <div class="col-md-2">
                    <p> <?php echo $name;?></p>
                </div>
                <div class="col-md-3">
                    <?php   $i=0;
                            foreach($alist as $s)
                                {echo $s;
                                 if($i!==(count($alist)-1))
                                     echo ", ";
                                 $i+=1;
                                }?> 
                </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>