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

?>
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
		
		$Bill100 = $row["Bill100"];
		$Bill50 = $row["Bill50"];
		$Bill20 = $row["Bill20"];
		$Bill10 = $row["Bill10"];
		$Bill5 = $row["Bill5"];
		$toonie= $row["toonie"];
		$loonie = $row["loonie"];
		$quarters = $row["quarters"];
		$dime = $row["dimes"];
		$nickle = $row["nickles"];
		$debit = 0.00;
		$pettyCash = $row["pettyCashFWD"];
		$pettyCashFWD = $row["pettyCashFWD"];
		
		        // Prepare an insert statement
        $sql = "INSERT INTO dailysale (Bill100, Bill50, Bill20, Bill10, Bill5, toonie, loonie, quarters, dimes, nickles, totalDebit, pettyCashFWD, pettyCash) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         echo $sql;
        if($stmt = mysqli_prepare($link, $sql)){
			
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $param_Bill100, $param_Bill50, $param_Bill20, $param_Bill10, $param_Bill5, $param_toonie, $param_loonie, $param_quarters, $param_dime, $param_nickle, $param_debit, $param_pettyCashFWD, $param_pettyCash);
           
            // Set parameters
			$param_Bill100 = $Bill100;
			$param_Bill50 = $Bill50;
			$param_Bill20 = $Bill20;
			$param_Bill10 = $Bill10;
			$param_Bill5 = $Bill5;
			$param_toonie = $toonie;
			$param_loonie = $loonie;
			$param_quarters = $quarters;
			$param_dime = $dime;
			$param_nickle = $nickle;
			$param_debit = $debit;
			$param_pettyCashFWD = $pettyCashFWD;
			$param_pettyCash = $pettyCashFWD;
			
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
            
			// Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
		}
		
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