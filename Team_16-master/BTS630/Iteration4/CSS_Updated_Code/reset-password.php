<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
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
		  height: 600px; /* only for demonstration, should be removed */
		}
    </style>
</head>
<body>
	<h1> Reset Password Page </h1>
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
			<h2>Reset Password</h2>
			<p>Please fill out this form to reset your password.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
				<div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
					<label>New Password</label>
					<input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
					<span class="help-block"><?php echo $new_password_err; ?></span>
				</div>
				<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
					<label>Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control">
					<span class="help-block"><?php echo $confirm_password_err; ?></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
					<a class="btn btn-link" href="welcome.php">Cancel</a>
				</div>
			</form>
		</div>  
	</article>		
	</section>	
</body>
</html>



