# Iteration2

# Class Diagram
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Class_Diagram_Iteration_2.PNG)

## Class diagram description

In interation two, we take the approach of adding user roles to each login account and give restrictions to some users who do not have the appropriate authorization to do certain tasks. We have introduced a manager, employee, and owner as different roles for accounts with different perks. Only managers and the owner can create a new account, while the employee can not do so.

We've also added in one of our main components, the daily sales tracker. This allows whichever user to input the amount in the till and record the amount of cash that was deposited at the end of the day. 

# Test Plan

## Flow Charts for Scenarios

### User Role - Create New User 
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/User%20Role%20Page.png)
#### Description
After our first iteration, we have decided to further the development of our project by including certain roles to different types of accounts. In this case, we have three different types of roles. These being employee, manager, and the owner. There is a after logging in with whichever account, there is a 'Create new user' button that can only be accessed by accounts that hold the 'Manager' or 'Owner' status. An employee will not have access to this, so they will be restricted from doing so.

So in this diagram, everyone will start off at the login page and when they put in their correct credentials, it will log them into their account

    -If they put in incorrect credentials, it will ask for them to retry again

They will be greeted with the welcome page which will offer them multiple different options to choose from. When a manager or owner chooses to create a new account, it will redirect them to a brand new page that we developed where they can create a new account.

     -If the user logs in as an employee, they will not be able to choose the create a new account button. It will redirect them nowhere.
     
They may also logout from the welcome page back to the login page as they please.

### Create New User
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Create%20User%20Page.png)
#### Description
Now that a manager or owner is ready to setup a new employee to the system, instead of being able to add a new user straight from the login page, they must now do it from their home page. This adds a huge level of security to the website and makes sure that no one is able to tamper with the database or modify/add new users as they please. These steps are very similar to the past iteration involving creating a new user.

On this page, they will be asked to input 3 main credentials. Their username, password, and a third text to confirm their password that must be over six characters long. If they input the information correctly, their account will be created and will be redirected back to the login page where they may enter in their new account to ensure it is working.

     -If the user puts in a user that already exists, it will prompt the user to retry with another ID as the one they have just put in already exists.
     -If the user inputs two passwords that do not match, it will prompt the user to retry as the passwords did not match the first time
     -If the user inputs a passwork that is less than six characters long, it will prompt the user to retry as the password did not reach the requirements for a password with the application
     -If the user does not put a role for account, will tell them to retry. Role is required

### Daily Sales Tracking
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Daily%20Sales.png)
#### Description
A new section that will introduce to the project is the Daily Sales page, which is where users will be able to input the amount of money into a database that will store the data in a database. Its very straight forwards, as in depending on how much the store made that day, the user must input the total amount made into the textboxes provided and click the add to database button to have it appear on the right side of the page, which will display the amount of bills, time, and date. 

        -If the user does not put in the information correctly, an error message will pop up underneath the textboxes saying that there must be a value
        -The debit value MUST also be a decimal value
        -If the user inputs values for some textboxes but leaves some empty, will respond with retry message. Must but 0's if not in use

Whenever they are finished with adding the a new unit, they may log out or continue with other options.
