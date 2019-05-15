<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"],$_POST["from_date1"], $_POST["to_date1"]))  
 {  
      $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cellmate";
	$port = 8889;

  
	  $connect = mysqli_connect($servername, $username, $password, $dbname, $port);    
      $output = '';  
      $query = "  
           SELECT * FROM dailysale  
           WHERE dateEntered BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
	  
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
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
	 $output .= '</table>';  
      echo $output;
      echo " Accumalated Total Sale = " . number_format((float)$accumSale, 2, '.', '');
      echo " Accumalated Cash Sale = " . number_format((float)$accumCash, 2, '.', '');
      echo " Accumalated Debit Sale = " . number_format((float)$accumDebit, 2, '.', '');

	  
// ---------------------------------------------------------------------------------------------------------------------------------


$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cellmate";
	$port = 8889;

  
	  $connect = mysqli_connect($servername, $username, $password, $dbname, $port);    
      $output = '';  
      $query = "  
           SELECT * FROM dailysale  
           WHERE dateEntered BETWEEN '".$_POST["from_date1"]."' AND '".$_POST["to_date1"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
	  
	  $output .= '  
           <table class="table table-bordered">  
                          <tr>   
							   <th width="20%">Date</th>  
							   <th width="10%">Total Cash Sale</th>  
							   <th width="10%">Total Debit Sale</th>  
							   <th width="10%">Total Sale</th>  
                          </tr>  
      ';  
       $accumSale2 = $accumCash2 = $accumDebit2 = 0.00;
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
				
				$accumSale2 = $accumSale2 + $totalSale;
				$accumCash2 = $accumCash2 + $totalCashSale;
				$accumDebit2 = $accumDebit2 + $row["totalDebit"];
				
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
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
	 $output .= '</table>';  
      echo $output;
      echo " Accumalated Total Sale = " . number_format((float)$accumSale2, 2, '.', '');
      echo " Accumalated Cash Sale = " . number_format((float)$accumCash2, 2, '.', '');
      echo " Accumalated Debit Sale = " . number_format((float)$accumDebit2, 2, '.', '');	  
	  
	  echo "<br />";
	  echo "<br />";
	  echo "<br />";
	  
	  $diff = $accumSale - $accumSale2;
	  
	  if ($diff == 0) {
		  echo " Timeframe A is Equal to Timeframe B";
		  echo "<br />";
	  }
	  else if ($diff > 0) {
		  echo " Timeframe A is surplus compared to Timeframe B by $" . number_format((float)$diff, 2, '.', '');	
	  }
	  else {
		  echo " Timeframe A is deficit compared to Timeframe B by $" . number_format((float)$diff, 2, '.', '');
	  }
	  
	
	  
 }  
 ?>