## Team_16 - Company System Upgrade
  * Ahmed Khan
  * Shathu Kamalanathan
  
## I. Business/Concept Description
Our objective is to take an existing sales report and employee tracking system for clients which take manual inputs in Microsoft Excel and upgrade it so that it becomes an automated online system.

## II. Business Processes being automated
# Employee Tracking #
Current system used is based on manual inputs daily on excel sheet dedicated for employee hours, for who is working that day/shifts. After the end of the month or pay cycle hours are calculated manually. This current system has flaws:
* Data can be changed 
* Human error 
* Back tracking data is tedious
 
The system proposed will solve these issues and provide more insightful information for the company. Employees will have profiles which allows them to track their own data to see how many hours they have worked, update contact information. There will also be authentication privileges. After the system is built there is a lot of information that is valuable and crucial to the company. Not everyone should have access to that information. By giving access privileges only those who are authenticated can see it. 
With all the information being calculated automatically, tracking number of hours and salary is much easier. For the manager it will help them manage the number of hours used to control wage budgets and hours worked. 

# Daily Sales Tracking

This section is crucial to the client. The current method to record information is to manually input the information as sales are being done. Just like the daily sales there are formulas in place to calculate certain pieces of data. The information required:

*	Daily Sale Information
    * Total Debt Sale
    * Total Cash Sale
*	Previous Month Daily Sale Information
*	Employee Hours 
*	Expense
 
Having to enter all this information can be tedious, time consuming, and prone to human error. This section will be fully automated with our system. Using all the information gathered by the Daily Sale Section you can easily calculate all this information and provide a full report.

# Expense and Wages Tracking

Very similar to the Employee section this tracks the wages for each employee and in total. In the daily sale report any expense spent on that day is entered and given a comment for what the reason was (current system). We will add a pre-defined section for reasons of expense defined by the client and have it calculate the total spent depending on reason and in total. 

# Inventory Update List

The current system in place cannot do this feature but requested from the client, this feature will be a list that indicates items/orders that are needed or completed. This will ensure the client is always fully aware of what is needed and everything is available in one place. This will be done using tables and forms to create, edit, or delete items. Whenever there is a new shipment of products (ranging from screen protectors to phone units) or if something instore is used or sold, employees must track down the inventory quantity manually and enter it to the form. 

## III. System Use Cases - Diagrams
# Daily Sales Tracking #
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR490/sales%20tracking.PNG)

# Employee Tracking #
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR490/Image%201.PNG)

# Expense and Wages Tracking #
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR490/Expenses.PNG)

# Inventory Update List #
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR490/inventory.PNG)

## IV. Casual Use Case Descriptions

## Daily Sale Tracking 
### Updating Till
#### Main Success Scenario:
* Employee counts till denominations and updates denominations in till to calculate current total sale. Denominations are:
    *	$100.00
    *	$50.00
    *	$20.00
    *	$10.00
    *	$5.00
    *	$2.00
    *	$1.00
    *	$0.25
    *	$0.10
    *	$0.05
    * Gift Cards

#### Alternate Scenario:
* Employee makes a mistake in counting. They have an option to rollback to previous count to adjust the till but will be prompted to enter reason of why the rollback was made for logging.

### Calculating Current Sale
#### Main Success Scenario:
*	After till denominations have been entered the employee presses update till button on system to calculate the sale. For the formula these are the values needed:
    * Sum of All denominations
    * Total Debit Sale
    * Petty Cash (Previous amount of cash in till from previous date)
    * Money Taken out (Expense, Wages)
       	Formula:
	totalSale = (sumOfDenomination+totalDebitSale+moneyOut)-pettyCash

#### Alternate Scenario:
* Employee makes a mistake in counting the denominations. They have an option to rollback to previous count to adjust the till but will be prompted to enter reason of why the rollback was made for logging.

### Withdrawing money for refund
#### Main Success Scenario:
* Employee needs to take out money for refund. Employee clicks the refund button on system. He/she is prompted with a message to enter the reason of taking out the money, and a list of all the denominations to which they will update as per what they take out from the till. 

#### Alternate Scenario:
* Employee makes a mistake in counting. They have an option to rollback to previous count to adjust the till but will be prompted to enter reason of why the rollback was made for logging.

### View Daily Sales Report
#### Main Success Scenario:
* Manager selects report tab on system. Once there he/she will select from a list what information they are looking for, in this case it will be daily sale tracking. They will then select a timeline to which they would like to see the data the options are to choose a start date and end date, monthly, and year. Once they select their preferred timeline they are displayed with all the data. 

#### Alternate Scenario:
* Manager selects a non existing timeframe. They are displayed with an error message and displayed a monthly review instead.  

## Employee Tracking

### Input Employee Hours
#### Main Success Scenario:
* Employee will submit hours worked into the system.
* Employee can see how many hours they've worked that.

#### Alternate Scenario:
* Employee forgets to put in hours. They have access to message management to fix their hours.

### Login
#### Main Success Scenario:
* Login allows employee to access companies employee page where they may punch in hours, change personal information, message 

#### Alternate Scenario:
* User does not log in. Must contact their manager to reset password
* User can't log in due to not having an account. Must contact manager to create an account

### Manager Login
#### Main Success Scenario:
* Login allows management to access management page where they may punch in hours, change personal information, message all employees, view daily/weekly/monthly/yearly sales reports.

#### Alternate Scenario:
* Management does not login. Tries again or resets password

### View Hours
#### Main Success Scenario:
* Workers will be able to view the hours they have worked to ensure hours are in correctly

#### Alternate Scenario:
* If hours are incorrect for employees, must contact management to correct hours
* If hours are incorrect for management, they may fix their own hours

### Update Contact information
#### Main Success Scenario:
* Personal information has been updated!
* Emails/Mail/Cheques will now be delivered to the appropriate location

#### Alternate Scenario:
* Missing fields
* Information has been put in incorrectly. User may go back and fix it.

### Edit Work Hours
#### Main Success Scenario:
* Hours fixed by management will allow for workers to be paid in full and correct amount

#### Alternate Scenario:
* N/A

### Manage Accounts
#### Main Success Scenario:
* Manager will be able to create a new account for new employees
* Manager will be able to change the password for pre-existing accounts in case a employee forgets their account
* Manager will be able to delete a account if an employee is no longer working with the company

#### Alternate Scenario:
* N/A

## Expense and Wages Tracking

### Expense cash Withdrawal
#### Main Success Scenario:
* Employee needs to take out money for expense. Employee clicks the withdraw expense button on system. He/she is prompted with a message to enter the reason of taking out the money, and a list of all the denominations to which they will update as per what they take out from the till. 

#### Alternate Scenario:
* Employee makes a mistake in counting. They have an option to rollback to previous count to adjust the till but will be prompted to enter reason of why the rollback was made for logging.

### Wage cash Withdrawal:
#### Main Success Scenario:
* Manager needs to take out money for expense. Clicks withdraw for wages button on system. He/she is prompted with a list of all employees, section to enter the amount, and a list of all current denominations in till to update. Manager selects which employee he or she is paying. Once selected will enter the amount he or she is paying. Then will proceed with updating the denominations in the section prompted.

#### Alternate Scenario:
* Manager makes a mistake in counting or the amount given. They have an option to rollback to previous count to adjust the till but will be prompted to enter reason of why the rollback was made for logging.

### Viewing reports for expense:
#### Main Success Scenario:
* Manager selects report tab on system. Once there he/she will select from a list what information they are looking for, in this case it will be expense tracking. They will then select a timeline to which they would like to see the data the options are to choose a start date and end date, monthly, and year. Once they select their preferred timeline they are displayed with all the data.

#### Alternate Scenario:
* Manager selects a non existing timeframe. They are displayed with an error message and displayed a monthly review instead.  

### Viewing reports for wages:
#### Main Success Scenario:
* Manager selects report tab on system. Once there he/she will select from a list what information they are looking for, in this case it will be wages tracking. They will then select a timeline to which they would like to see the data the options are to choose a start date and end date, monthly, and year. Once they select their preferred timeline they are displayed with all the data.

#### Alternate Scenario:
* Manager selects a non existing timeframe. They are displayed with an error message and displayed a monthly review instead. 

## Inventory Update List

### View Inventory/Job List - Completed Tasks:
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will be provided with a list to select which items you want to see (completed, incomplete, jobs, orders) in this case it will be completed, and a timeline option (start and end date, weekly, and monthly). Once selected all data will be displayed for all completed tasks in the timeline.   

#### Alternate Scenario:
* Employee selects a non existing timeframe. They are displayed with an error message and displayed a weekly review instead.

### View Inventory/Job List - Incompleted Tasks:
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will be provided with a list to select which items you want to see (completed, incomplete, jobs, orders) in this case it will be incomplete, and a timeline option (start and end date, weekly, and monthly). Once selected all data will be displayed for all incomplete tasks in the timeline.   

#### Alternate Scenario:
* Employee selects a non existing timeframe. They are displayed with an error message and displayed a weekly review instead.  

### View Inventory/Job List – Jobs:
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will be provided with a list to select which items you want to see (completed, incomplete, jobs, orders) in this case it will be jobs, and a timeline option (start and end date, weekly, and monthly). Once selected all data will be displayed for all jobs in the timeline.   

#### Alternate Scenario:
* Employee selects a non existing timeframe. They are displayed with an error message and displayed a weekly review instead.  

### View Inventory/Job List – Orders:
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will be provided with a list to select which items you want to see (completed, incomplete, jobs, orders) in this case it will be orders, and a timeline option (start and end date, weekly, and monthly). Once selected all data will be displayed for all orders in the timeline.     

#### Alternate Scenario:
* Employee selects a non existing timeframe. They are displayed with an error message and displayed a weekly review instead.  

### Add inventory order to list:
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will click on add item and will be prompted to enter title and select if it is urgent or non-urgent. Once all information is entered will click on add button to add item to list.   

#### Alternate Scenario:
* Employee enters wrong information click edit to fix to item information. 

### Add job to list: 
#### Main Success Scenario:
* Employee goes to inventory/job tracker. Once there will click on add item and will be prompted to select an option from a list (inventory or job) in this case it will be job. Employee then enters a title, select if it is urgent or non-urgent, Name of customer, and phone number. Once all information is entered will click on add button to add item to list. 

#### Alternate Scenario:
* Employee enters wrong information click edit to fix to item information. 

## V. Technologies

Regarding our system upgrade proposal, it requires no more than a computer and desktop in terms of hardware. To develope the program to do these tasks we have proposed earlier on, we are going to be making scripts to do each task. To handle each individuals personal information such as contact information and the amount of hours they have worked, we plan to store that information on a server and use SQL to manage databases.
