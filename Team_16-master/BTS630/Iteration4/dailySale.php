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
<html>
<head>
    <meta charset="UTF-8">
    <title>Daily Sale</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="myStyle.css" type="text/css">
    <style type="text/css">
		.page-header{ font: 14px sans-serif; text-align: center; }
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg .tg-845d{font-weight:bold;background-color:#000000;color:#efefef;border-color:#000000;text-align:left;vertical-align:top}
		.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
		.tg .tg-0lax{text-align:left;vertical-align:top}
		</style>
</head>
<body>

<?php
// Include config file
require_once "config.php";

$Bill100 = $Bill50 = $Bill20 = $Bill10 = $Bill5 = $toonie= $loonie = $quarters = $dime = $nickle = $debit = "";
$Bill100_err = $Bill50_err = $Bill20_err = $Bill10_err = $Bill5_err = $toonie_err = $loonie_err = $quarters_err = $dime_err = $nickle_err = $debit_err = "";
$expense = 0;
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$denminationChecker = true;
    // Validate $100 Bills --------------------------------------------------------------------
	$Bill100 = $_POST["Bill100_"];
    if(empty(trim($_POST["Bill100_"]))){
        $Bill100_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["Bill100_"])) {
		$Bill100_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($Bill100 < 0){
        $Bill100_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }
		
	// Validate $50 Bills --------------------------------------------------------------------
	$Bill50 = $_POST["Bill50_"];
    if(empty(trim($_POST["Bill100_"]))){
        $Bill50_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["Bill50_"])) {
		$Bill50_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($Bill50 < 0){
        $Bill50_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate $20 Bills --------------------------------------------------------------------
	$Bill20 = $_POST["Bill20_"];
	if(empty(trim($_POST["Bill20_"]))){
        $Bill20_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["Bill20_"])) {
		$Bill20_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($Bill20 < 0){
        $Bill20_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }
		
	// Validate $10 Bills --------------------------------------------------------------------
	$Bill10 = $_POST["Bill10_"];
	if(empty(trim($_POST["Bill10_"]))){
        $Bill10_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["Bill10_"])) {
		$Bill10_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($Bill10 < 0){
        $Bill10_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate $5 Bills --------------------------------------------------------------------
	$Bill5 = $_POST["Bill5_"];
	if(empty(trim($_POST["Bill5_"]))){
        $Bill5_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["Bill5_"])) {
		$Bill5_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($Bill5 < 0){
        $Bill5_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate toonie --------------------------------------------------------------------
	$toonie = $_POST["toonie_"];
    if(empty(trim($_POST["toonie_"]))){
        $toonie_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["toonie_"])) {
		$toonie_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($toonie < 0){
        $toonie_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate loonie --------------------------------------------------------------------
	$loonie = $_POST["loonie_"];
	if(empty(trim($_POST["loonie_"]))){
        $loonie_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["loonie_"])) {
		$loonie_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($loonie < 0){
        $loonie_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate quarters --------------------------------------------------------------------
	$quarters = $_POST["quarters_"];
	if(empty(trim($_POST["quarters_"]))){
        $quarters_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["quarters_"])) {
		$quarters_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($quarters < 0){
        $quarters_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate dime --------------------------------------------------------------------
	$dime = $_POST["dime_"];
	if(empty(trim($_POST["dime_"]))){
        $dime_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["dime_"])) {
		$dime_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($dime < 0){
        $dime_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }

	// Validate nickles --------------------------------------------------------------------
	$nickle = $_POST["nickle_"];
	if(empty(trim($_POST["nickle_"]))){
        $nickle_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    } elseif (!is_numeric($_POST["nickle_"])) {
		$nickle_err = "Please enter a number, if 0 then please enter 0";
		$denminationChecker = false;
	} elseif($nickle < 0){
        $nickle_err = "Please enter a valid value, if denomination is 0, please enter 0.";
		$denminationChecker = false;
    }
	
	// Validate debit --------------------------------------------------------------------
	$debit = $_POST["debit_"];
	if(empty(trim($_POST["debit_"]))){
        $debit_err = "Please enter a valid value, if denomination is 0, please enter 0.00.";
		$denminationChecker = false;
    } elseif (!is_float($_POST["debit_"] + 0)) {
		$debit_err = "Please enter a number, if 0 then please enter 0.00";
		$denminationChecker = false;
	} elseif($debit < 0.00){
        $debit_err = "Please enter a valid value, if denomination is 0, please enter 0.00.";
		$denminationChecker = false;
    }	
	
	if ($denminationChecker == true) {   

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "cellmate";
		$port = 8889;
		
		// Gets Expense Values   ------------------------------------------------------------------------------------------------------------
		// Create connection
		$connLatestDate = new mysqli($servername, $username, $password, $dbname, $port);
		// Check connection
		if ($connLatestDate->connect_error) {
			die("Connection failed: " . $connLatestDate->connect_error);
		} 

		$sqlLatestDate = "SELECT id FROM dailysale WHERE dateEntered IN (SELECT MAX(dateEntered) FROM dailysale)";
		$resultLatestDate = $connLatestDate->query($sqlLatestDate);

		if ($resultLatestDate->num_rows > 0) {
			// output data of each row
			while($rowLatestDate = $resultLatestDate->fetch_assoc()) {
				$idLatestDate = $rowLatestDate["id"];
			}
		}
		else {
			echo "0 results";
		}
		$connLatestDate->close();
		
        // Prepare an insert statement
		$t100 = $Bill100 * 100.00;
		$t50 = $Bill50 * 50.00;
		$t20 = $Bill20 * 20.00;
		$t10 = $Bill10 * 10.00;
		$t5 = $Bill5 * 5.00;
		$tToonie = $toonie * 2.00;
		$tLoonie = $loonie * 1.00;
		$tQuarters = $quarters * 0.25;
		$tDime = $dime * 0.10;
		$tNickle = $nickle * 0.05;
		
		$pettyCashFWD = $t100 + $t50 + $t20 + $t10 + $t5 + $tToonie + $tLoonie + $tQuarters + $tDime + $tNickle;

        
		$sql = "UPDATE dailysale ". "SET Bill100 = $Bill100, Bill50 = $Bill50, Bill20 = $Bill20, Bill10 = $Bill10, Bill5 = $Bill5, toonie = $toonie, loonie = $loonie, quarters = $quarters, dimes = $dime, nickles = $nickle, totalDebit = $debit, pettyCashFWD = $pettyCashFWD WHERE id = $idLatestDate" ;
         echo $sql;
        if($stmt = mysqli_prepare($link, $sql)){
			
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                // header("location: dailySale.php");
				// This is in the PHP file and sends a Javascript alert to the client
				echo "<script>
						alert('Values have been entered');
						window.location.href='dailySale.php';
					</script>";
            } else{
                echo "Something went wrong. Please try again later.";
            }
			
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
	
}

?>
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
	<div class="row">
		<div id="borderRadiusLeft" class="column left" >
				<h2>Daily Sale</h2>
				<p>Please fill this form to create a new entry.</p>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<?php // ---- $100.00 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($Bill100_err)) ? 'has-error' : ''; ?>">
						<label>$100.00</label>
						<input type="text" name="Bill100_" class="form-control" value="<?php echo $Bill100; ?>">
						<span class="help-block"><?php echo $Bill100_err; ?></span>
					</div>    
					<?php // ---- $50.00 ------------------------------------------------------------------------?> 
					<div class="form-group <?php echo (!empty($Bill50_err)) ? 'has-error' : ''; ?>">
						<label>$50.00</label>
						<input type="text" name="Bill50_" class="form-control" value="<?php echo $Bill50; ?>">
						<span class="help-block"><?php echo $Bill50_err; ?></span>
					</div>    
					<?php // ---- $20.00 ------------------------------------------------------------------------?>					
					<div class="form-group <?php echo (!empty($Bill20_err)) ? 'has-error' : ''; ?>">
						<label>$20.00</label>
						<input type="text" name="Bill20_" class="form-control" value="<?php echo $Bill20; ?>">
						<span class="help-block"><?php echo $Bill20_err; ?></span>
					</div>
					<?php // ---- $10.00 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($Bill10_err)) ? 'has-error' : ''; ?>">
						<label>$10.00</label>
						<input type="text" name="Bill10_" class="form-control" value="<?php echo $Bill10; ?>">
						<span class="help-block"><?php echo $Bill10_err; ?></span>
					</div>
					<?php // ---- $5.00 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($Bill5_err)) ? 'has-error' : ''; ?>">
						<label>$5.00</label>
						<input type="text" name="Bill5_" class="form-control" value="<?php echo $Bill5; ?>">
						<span class="help-block"><?php echo $Bill5_err; ?></span>
					</div>
					<?php // ---- $2.00 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($toonie_err)) ? 'has-error' : ''; ?>">
						<label>$2.00</label>
						<input type="text" name="toonie_" class="form-control" value="<?php echo $toonie; ?>">
						<span class="help-block"><?php echo $toonie_err; ?></span>
					</div>
					<?php // ---- $1.00 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($loonie_err)) ? 'has-error' : ''; ?>">
						<label>$1.00</label>
						<input type="text" name="loonie_" class="form-control" value="<?php echo $loonie; ?>">
						<span class="help-block"><?php echo $loonie_err; ?></span>
					</div>
					<?php // ---- $0.25 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($quarters_err)) ? 'has-error' : ''; ?>">
						<label>$0.25</label>
						<input type="text" name="quarters_" class="form-control" value="<?php echo $quarters; ?>">
						<span class="help-block"><?php echo $quarters_err; ?></span>
					</div>
					<?php // ---- $0.10 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($dime_err)) ? 'has-error' : ''; ?>">
						<label>$0.10</label>
						<input type="text" name="dime_" class="form-control" value="<?php echo $dime; ?>">
						<span class="help-block"><?php echo $dime_err; ?></span>
					</div>
					<?php // ---- $0.05 ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($nickle_err)) ? 'has-error' : ''; ?>">
						<label>$0.05</label>
						<input type="text" name="nickle_" class="form-control" value="<?php echo $nickle; ?>">
						<span class="help-block"><?php echo $nickle_err; ?></span>
					</div>
					<?php // ---- Debit ------------------------------------------------------------------------?>
					<div class="form-group <?php echo (!empty($debit_err)) ? 'has-error' : ''; ?>">
						<label>Debit</label>
						<input type="text" name="debit_" class="form-control" value="<?php echo $debit; ?>">
						<span class="help-block"><?php echo $debit_err; ?></span>
					</div>
					<?php // ---- Submit ------------------------------------------------------------------------?>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Update">
						<input type="reset" class="btn btn-default" value="Reset">
						<a href="expense.php" class="btn btn-danger">Add Expense</a>
						<a href="wages.php" class="btn btn-danger">Add Salary</a>
						<a href="createNewDay.php" class="btn btn-primary">Create New Day</a>
					</div>
				</form>
		</div>
		<div id="borderRadiusRight" class="column right" >
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cellmate";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM dailysale WHERE dateEntered IN (SELECT MAX(dateEntered) FROM dailysale)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$tillDate = $row["dateEntered"];
		
		// Removes the time from Date and Time
		$createDate = new DateTime($tillDate);
		$strip = $createDate->format('Y-m-d');
		
		$tillQty100 = $row["Bill100"];
			
		$total100 = $row["Bill100"] * 100.00;
		$total50 = $row["Bill50"] * 50.00;
		$total20 = $row["Bill20"] * 20.00;
		$total10 = $row["Bill10"] * 10.00;
		$total5 = $row["Bill5"] * 5.00;
		$totalToonie = $row["toonie"] * 2.00;
		$totalLoonie = $row["loonie"] * 1.00;
		$totalQuarters = $row["quarters"] * 0.25;
		$totalDimes = $row["dimes"] * 0.10;
		$totalNickles = $row["nickles"] * 0.05;
		$pettyCashValue = $row["pettyCash"];
		$totalDebit = $row["totalDebit"];

		
		$totalExpense = 0.00;
		$totalWage = 0.00;
		
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "cellmate";
		$port = 8889;
		
		// Gets Expense Values   ------------------------------------------------------------------------------------------------------------
		// Create connection
		$connAddExpense = new mysqli($servername, $username, $password, $dbname, $port);
		// Check connection
		if ($connAddExpense->connect_error) {
			die("Connection failed: " . $connAddExpense->connect_error);
		} 

		//$sqlAddExpense = "SELECT * from expense WHERE DATE(`dateEntered`) = '" . $dtConverted . "'";
		$sqlAddExpense = "SELECT * FROM `expense` WHERE CAST(dateEntered AS DATE) = '" . $strip . "'";
		$resultAddExpense = $connAddExpense->query($sqlAddExpense);

		if ($resultAddExpense->num_rows > 0) {
			// output data of each row
			while($rowAddExpense = $resultAddExpense->fetch_assoc()) {
				$totalExpense = $totalExpense + $rowAddExpense["expenseAmount"];
			}
		}
		else {
			echo "0 results";
		}
		$connAddExpense->close();
		// Gets Wages Values   ------------------------------------------------------------------------------------------------------------
		// Create connection
		$connAddWage = new mysqli($servername, $username, $password, $dbname, $port);
		// Check connection
		if ($connAddWage->connect_error) {
			die("Connection failed: " . $connAddWage->connect_error);
		} 

		$sqlAddWage = "SELECT * FROM `wage` WHERE CAST(dateEntered AS DATE) = '" . $strip . "'";
		$resultAddWage = $connAddWage->query($sqlAddWage);

		if ($resultAddWage->num_rows > 0) {
			// output data of each row
			while($rowAddWage = $resultAddWage->fetch_assoc()) {
				$totalWage = $totalWage + $rowAddWage["wageAmount"];
			}
		}
		else {
			echo "0 results";
		}
		$connAddWage->close();
		// ---------------------------------------------------------------------------------------------------------------------------------------
		
		
		$totalCashAvl = $total100 + $total50 + $total20 + $total10 + $total5 + $totalToonie + $totalLoonie + $totalQuarters + $totalDimes + $totalNickles + $totalExpense + $totalWage;
		$totalCashSale = $totalCashAvl - $pettyCashValue;
		$totalSale = $totalDebit + $totalCashSale;
?>


<table class="tg">
  <tr>
  <th class="tg-845d">Date: <?php echo $tillDate; ?></th>
  <th class="tg-845d"></th>
  <th class="tg-845d"></th>
  </tr>
  <tr>
    <th class="tg-845d">Dollar Value</th>
    <th class="tg-845d"># of Bills</th>
    <th class="tg-845d">Total Amount</th>
  </tr>
  <tr>
    <td class="tg-0pky">100</td>
    <td class="tg-0pky"><?php echo $row["Bill100"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$total100, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">50</td>
    <td class="tg-0pky"><?php echo $row["Bill50"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$total50, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">20</td>
    <td class="tg-0pky"><?php echo $row["Bill20"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$total20, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">10</td>
    <td class="tg-0pky"><?php echo $row["Bill10"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$total10, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky"><?php echo $row["Bill5"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$total5, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky"><?php echo $row["toonie"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$totalToonie, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky"><?php echo $row["loonie"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$totalLoonie, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">.25</td>
    <td class="tg-0pky"><?php echo $row["quarters"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$totalQuarters, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">.10</td>
    <td class="tg-0pky"><?php echo $row["dimes"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$totalDimes, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">.05</td>
    <td class="tg-0pky"><?php echo $row["nickles"]; ?></td>
    <td class="tg-0pky"><?php echo number_format((float)$totalNickles, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Expense</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><?php echo number_format((float)$totalExpense, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Salary</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><?php echo number_format((float)$totalWage, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Total Cash Available</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><?php echo number_format((float)$totalCashAvl, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Petty Cash</td>
	<td class="tg-0pky"></td>
    <td class="tg-0pky"><?php echo number_format((float)$row["pettyCash"], 2, '.', ''); ?></td>
  </tr>
  <tr>
  <td class="tg-0lax">Total Cash Sale</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><?php echo number_format((float)$totalCashSale, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Debit</td>
	<td class="tg-0pky"></td>
    <td class="tg-0pky"><?php echo number_format((float)$row["totalDebit"], 2, '.', ''); ?></td>
    
  </tr>
  <tr>
  <td class="tg-0lax">Total Sale</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><?php echo number_format((float)$totalSale, 2, '.', ''); ?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Petty Cash Forward</td>
	<td class="tg-0pky"></td>
    <td class="tg-0pky"><?php echo number_format((float)$row["pettyCashFWD"], 2, '.', ''); ?></td>
  </tr>
</table>

<?php
		
    }
} else {
    echo "0 results";
}
$conn->close();
?>

		</div>
	</div>
</body>
</html>