<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
		h1{padding: 60px;text-align: center;background: #00FFFF; font-size:60px ; }
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		.btn-danger{  padding: 15px 32px;   height: 60px;width: 200px;}
		.btn-warning{   padding: 15px 32px; height: 60px;width: 200px;}
		//.topnav {overflow: hidden; background-color: #D3D3D3; padding: 10px;}	
		.topnav{  float: left;width: 17%; height: 600px; background: #ccc; padding: 20px;}
		section:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		article {
		  float: left;
		  padding: 20px;
		  width: 70%;
		  background-color: #f1f1f1;
		  height: 700px; 
		}
    </style>
</head>
<body>

    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
	<section>
		<div class = "topnav">
			<a href="welcome.php" class="btn btn-warning">Home</a>
			<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
			<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			<a href="createUser.php" class="btn btn-danger">Create User</a>
			<a href="dailySale.php" class="btn btn-danger">Daily Sale</a>
			<a href="reports.php" class="btn btn-danger">Reports</a>
			<a href="compare.php" class="btn btn-danger">Comparison Report</a>
			<a href="calender.php" class="btn btn-danger">Calender</a>
		</div>

	<article>
		<iframe src="https://calendar.google.com/calendar/embed?src=3gl3r723qp11eorfak4uno5f6o%40group.calendar.google.com&ctz=America%2FToronto" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		<input class="btn btn-danger" type="button" value="Add event" onclick="location='add_event.php'" />
	</article>
	</section>
	</body>
</html>