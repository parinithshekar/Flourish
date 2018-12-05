<?php
session_start();
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

<body>
    <div class="d-flex flex-row align-items-center align-content-center newsletter-subscribe">
        <div class="container justify-content-center align-items-center">
            <div class="intro">
                <h2 class="text-center">Author</h2>
                <p class="text-center">Enter the details of the authors</p>
            </div>
            <form method="post" action="newPublication.php" class="form-inline d-flex flex-column justify-content-center align-items-center align-content-center align-self-center" enctype="multipart/form-data">
                <div class="form-group"><input class="form-control-plaintext" type="text" value="First Author:" readonly="" style="font-size:20px;"><input class="form-control" type="text" name="authid1" value=<?php echo $_SESSION["Author_ID"]?> readonly="" placeholder="Author ID" style="width:110px;margin:5px;">

                    <div>
                    <input
                        class="form-control" type="text" name="fname1" value=<?php echo $_SESSION["FName"]?> readonly="" placeholder="First Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="mname1" value=<?php echo $_SESSION["MName"]?> readonly="" placeholder="Middle Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="lname1" value=<?php echo $_SESSION["LName"]?>
                            readonly="" placeholder="Last Name" style="width:110px;margin:5px;">
                    </div>
                    
                </div>
                <div class="form-group"><input class="form-control-plaintext" type="text" value="Second Author:" readonly="" style="font-size:20px;"><input class="form-control" type="text" name="authid2" placeholder="Author ID" style="width:110px;margin:5px;">
                <!--
                <input class="form-control"
                        type="text" name="fname2" placeholder="First Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="mname2" placeholder="Middle Name" style="width:110px;margin:5px;"><input class="form-control" type="text"
                        name="lname2" placeholder="Last Name" style="width:110px;margin:5px;">
                -->
                </div>
                <div class="form-group"><input class="form-control-plaintext" type="text" value="Third Author:" readonly="" style="font-size:20px;"><input class="form-control" type="text" name="authid3" placeholder="Author ID" style="width:110px;margin:5px;">
                <!--
                    <input class="form-control"
                        type="text" name="fname3" placeholder="First Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="mname3" placeholder="Middle Name" style="width:110px;margin:5px;"><input class="form-control" type="text"
                        name="lname3" placeholder="Last Name" style="width:110px;margin:5px;">
                -->
                </div>
                <div class="form-group"><input class="form-control-plaintext" type="text" value="Fourth Author:" readonly="" style="font-size:20px;"><input class="form-control" type="text" name="authid4" placeholder="Author ID" style="width:110px;margin:5px;">
                <!--
                    <input class="form-control"
                        type="text" name="fname4" placeholder="First Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="mname4" placeholder="Middle Name" style="width:110px;margin:5px;"><input class="form-control" type="text"
                        name="lname4" placeholder="Last Name" style="width:110px;margin:5px;">
                -->
                </div>
                <div class="form-group"><input class="form-control-plaintext" type="text" value="Fifth Author:" readonly="" style="font-size:20px;"><input class="form-control" type="text" name="authid5" placeholder="Author ID" style="width:110px;margin:5px;">
                <!--
                    <input class="form-control"
                        type="text" name="fname5" placeholder="First Name" style="width:110px;margin:5px;"><input class="form-control" type="text" name="mname5" placeholder="Middle Name" style="width:110px;margin:5px;"><input class="form-control" type="text"
                        name="lname5" placeholder="Last Name" style="width:110px;margin:5px;">
                -->
                </div>
                <div class="form-group flex-column">
                    <div class="intro">
                        <h2 class="text-center">Paper</h2>
                        <p class="text-center">Enter the details specific to your paper</p>
                    </div><input class="form-control" type="text" name="title" required="" placeholder="Title" style="margin:17px;"><textarea class="form-control" name="abstract" required="" placeholder="Abstract" style="margin:17px;height:200px;width:400px;"></textarea>
                    <small
                        class="form-text text-muted">Keywords seperated by commas</small><input class="form-control" type="text" name="keywords" required="" placeholder="Keywords" style="margin:17px;"><input class="form-control" type="text" name="eid" required="" placeholder="EID" style="margin:17px;">
                        <input
                            class="form-control" type="text" name="doi" required="" placeholder="DOI Number" style="margin:17px;"><small class="form-text text-muted">Upload PDF file</small><input type="file" name="paper_file" id="fileToUpload"></div>

                <div class="form-group flex-column" style="margin:38px;">
                    <div class="intro">
                        <h2 class="text-center">Journal/Conference</h2>
                        <p class="text-center">Details regarding the Journal/ Conference</p>
                    </div><select class="form-control" name="source" style="height:45px;margin:17px;"><optgroup label="Select Source"><option value="13">Journal</option><option value="14">Conference</option></optgroup></select><input class="form-control" type="text"
                        name="name" required="" placeholder="Name" style="margin:17px;"><input class="form-control" type="number" name="volume" required="" placeholder="Volume Number" min="0" step="1" style="margin:17px;"><input class="form-control" type="number"
                        name="issue" required="" placeholder="Issue Number" min="0" step="1" style="margin:17px;"><input class="form-control" type="number" name="impactfactor" required="" placeholder="Impact Factor" min="0" step="0.1" style="margin:17px;">
                    <input
                        class="form-control" type="number" name="citescore" required="" placeholder="Cite Score" min="0" step="1" style="margin:17px;"><small class="form-text text-muted">Date of publication</small><input class="form-control" type="date" name="date" required="" style="margin:17px;"><input class="form-control" type="text" name="issn" required="" placeholder="ISSN"
                            style="margin:17px;"><input class="form-control" type="text" name="isbn" required="" placeholder="ISBN" style="margin:17px;">
                    <small class="form-text text-muted" disable>Location only for Conference</small><input class="form-control" type="text"
                            name="location" placeholder="Location of Conference" style="margin:17px;"></div><button class="btn btn-primary btn-block" type="submit" style="background-color:#f4476b;height:45px;margin:16px;font-size:20px;">Submit</button></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>