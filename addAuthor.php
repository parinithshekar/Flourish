<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean" style="background-color:rgb(252,252,252);">
        <form method="post" action="submitNewAuthor.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-personadd"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="authid" required="" placeholder="Author ID"></div>
            <div class="form-group"><input class="form-control" type="text" name="fname" required="" placeholder="First Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="mname" required="" placeholder="Middle Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="lname" required="" placeholder="Last Name"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" required="" placeholder="Password"></div>
            
            <div class="form-group"><div class="form-check"><input id="formCheck-1" class="form-check-input" type="checkbox" name="admin_privs"/><label class="form-check-label" for="formCheck-1">Give Admin Privileges</label></div></div>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Add Author</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>