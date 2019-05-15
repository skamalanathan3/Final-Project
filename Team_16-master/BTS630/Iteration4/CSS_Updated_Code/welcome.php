<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./css/myStyle.css" type="text/css">
    <style type="text/css">
	h1{padding: 60px;text-align: center;background: #00FFFF; font-size:60px ; }
        body{ font: 14px sans-serif; text-align: center; }
		.btn-danger{  padding: 15px 32px;   height: 60px;width: 200px;}
		.btn-warning{   padding: 15px 32px; height: 60px;width: 200px; }
		//.topnav {overflow: hidden; background-color: #D3D3D3; padding: 10px;}	
		.topnav{  float: left;width: 17%; height: 600px; background: #ccc; padding: 20px; border-style: solid;}
		h1 {  padding: 60px;text-align: center;background: #00FFFF; font-size:60px ;border-style: solid;}
    </style>
</head>
<body>
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div class = "topnav">
		<a href="welcome.php" class="btn btn-warning">Home</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="createUser.php" class="btn btn-danger">Create User</a>
		<a href="dailySale.php" class="btn btn-danger">Daily Sale</a>
		<a href="reports.php" class="btn btn-danger">Reports</a>
		<a href="compare.php" class="btn btn-danger">Comparison Report</a>
		<a href="calender.php" class="btn btn-danger">Calender</a>
    </nav>
</body>
</html>