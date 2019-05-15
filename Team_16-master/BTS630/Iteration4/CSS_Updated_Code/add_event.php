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
		  height: 1000px; /* only for demonstration, should be removed */
		}
    </style>
</head>
<body>
	<h1> Add Event </h1>
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
			<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSepYNXZ-YzuRdMsBzA_avZcAnVrPFO8bDQGJqbfM36PIuFnuw/viewform?embedded=true" width="640" height="896" frameborder="0" marginheight="0" marginwidth="0" onload="self.scrollTo(0,0)">Loading...</iframe>
			<input class="btn btn-danger type="button" value="Back!" onclick="location='calender.php'" />
		</article>
	</section>
</body>