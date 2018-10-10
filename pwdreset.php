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
    <div class="login-clean" placeholder="Old Password">
        <form method="post" action="change.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group">
                <input class="form-control" type="password" name="oldpassword" required="" placeholder="Old Password">
                <input class="form-control" type="password" name="newpassword" required="" placeholder="New Password">
                <input class="form-control" type="password" name="conpassword" required="" placeholder="Confirm New Password"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">CHANGE PASSWORD</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>