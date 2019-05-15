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
    <title>Calender</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./css/myStyle.css" type="text/css">
    <style type="text/css">
		.page-header{ font: 14px sans-serif; text-align: center; }
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
    <p>
		<a href="welcome.php" class="btn btn-warning">Home</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="createUser.php" class="btn btn-danger">Create User</a>
		<a href="dailySale.php" class="btn btn-danger">Daily Sale</a>
		<a href="reports.php" class="btn btn-danger">Reports</a>
		<a href="compare.php" class="btn btn-danger">Comparison Report</a>
		<a href="calender.php" class="btn btn-danger">Calender</a>
    </p>
	</div>
	
		<iframe src="https://calendar.google.com/calendar/embed?src=3gl3r723qp11eorfak4uno5f6o%40group.calendar.google.com&ctz=America%2FToronto" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		
		<input type="button" value="Add event" onclick="location='add_event.php'" />
	</body>
</html>