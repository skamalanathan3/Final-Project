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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
</head>
<body>

<?php
// Include config file
require_once "config.php";

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
    </p>
	</div>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cellmate";
$port = 8889;

  
 $connect = mysqli_connect($servername, $username, $password, $dbname, $port);  
 $query = "SELECT * FROM dailysale WHERE MONTH(dateEntered) = MONTH(CURDATE()) ORDER BY dateEntered desc";  
 $result = mysqli_query($connect, $query);  
 ?>  

      <body>  
           <br /><br />  
		    <h2 align="center">Comparison Report - Timeframe A to Timeframe B</h2>	
           <div class="container" style="width:900px;">  	
                <div class="col-md-3"> 
					 <h3 align="center">Timeframe A</h3>	
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>
				<div class="col-md-3">
					 <h3 align="center">Timeframe B</h3>					
                     <input type="text" name="from_date1" id="from_date1" class="form-control" placeholder="From Date" />  
                     <input type="text" name="to_date1" id="to_date1" class="form-control" placeholder="To Date" />  
                </div>				
                <div style="clear:both"></div> 
				<br />
				<div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
				<br /> 
				<br /> 
				<div id="order_table"> 
				<?php 
				$output .= '  
           <table class="table table-bordered">  
                          <tr>   
							   <th width="20%">Date</th>  
							   <th width="10%">Total Cash Sale</th>  
							   <th width="10%">Total Debit Sale</th>  
							   <th width="10%">Total Sale</th>  
                          </tr>  
      ';  
     $accumSale = $accumCash = $accumDebit = 0.00;
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
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
					
				}
				$connAddWage->close();
				// ---------------------------------------------------------------------------------------------------------------------------------------
				
				
				$totalCashAvl = $total100 + $total50 + $total20 + $total10 + $total5 + $totalToonie + $totalLoonie + $totalQuarters + $totalDimes + $totalNickles + $totalExpense + $totalWage;
				$totalCashSale = $totalCashAvl - $pettyCashValue;
				$totalSale = $totalDebit + $totalCashSale;
				
				$accumSale = $accumSale + $totalSale;
				$accumCash = $accumCash + $totalCashSale;
				$accumDebit = $accumDebit + $row["totalDebit"];
				
				$output .= '  
					 <tr>  
                               <td>'.$tillDate.'</td>  
                               <td>'.number_format((float)$totalCashSale, 2, '.', '').'</td>  
                               <td>'.number_format((float)$row["totalDebit"], 2, '.', '').'</td>  
                               <td>'.number_format((float)$totalSale, 2, '.', '').'</td>  
                              
                          </tr>  
                ';  
           }  
      }  
      else  
      {  
            $output .= '  
                <tr>  
                     <td colspan="5">No Entry Found</td>  
                </tr>  
           ';  
      }  
      echo $output; 
?>	  
                     </table>  
					 <?php
      echo " Accumalated Total Sale = " . number_format((float)$accumSale, 2, '.', '');
      echo " Accumalated Cash Sale = " . number_format((float)$accumCash, 2, '.', '');
      echo " Accumalated Debit Sale = " . number_format((float)$accumDebit, 2, '.', '');	
					 ?>
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker(); 
				$("#from_date1").datepicker();  
                $("#to_date1").datepicker(); 				
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
				var from_date1 = $('#from_date1').val();  
                var to_date1 = $('#to_date1').val();  
                if(from_date != '' && to_date != '' && from_date1 != '' && to_date1 != '')  
                {  
                     $.ajax({  
                          url:"filterCmp.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date, from_date1:from_date1, to_date1:to_date1},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>

