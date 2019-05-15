# Iteration 1

# Class Diagram
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Class%20Diagram.PNG)

## Class diagram description

To speak a bit on behalf of the diagram, this diagram outlines the classes and attributes that are placed and taken when logging into our website. As per employee, every employee has a userID and and password for their user in order to log into the system. A user can access the single application, however the application can be accessed by zero to many users at a time. Both signing out and resetting your password rely on being on the application.

# Test Plan

## Flow Charts for Scenarios

### Login page Flowchart
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Login%20Flow%20Diagram.png)
#### Description
At the very beginning of when the user starts up the application, they will be greeted with the login page. On this page, there are two areas where they may input their User and password. In the case where they input the information correctly that matches the user, they will be granted acces to the welcome page, where they may continue with their business.

    -In the scenario where they input the incorrect credentials, they will be greeted with a message saying that the information is incorrect and to try again. 

If neither of these work for them, their account may not be created, so there is a register button that they may click that will take them to the register page. On this page, they will be asked to input 3 main credentials. Their username, password, and a third text to confirm their password that must be over six characters long. If they input the information correctly, their account will be created and will be redirected back to the login page where they may enter in their new account to ensure it is working.

     -If the user puts in a user that already exists, it will prompt the user to retry with another ID as the one they have just put in already exists.
     -If the user inputs two passwords that do not match, it will prompt the user to retry as the passwords did not match the first time
     -If the user inputs a passwork that is less than six characters long, it will prompt the user to retry as the password did not reach the requirements for a password with the application

### Welcome page Flowchart
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/welcome%20page%20flow%20chart.png)
#### Description
After logging in, the user will be now greeted with the welcome page which is well under development. For now however, there will be two options they will be able to choose from. One being the reset password button, and the other being a sign out button. If they decide to click the reset password button, they will be redirected to the reset password page.

        -In the case they choose the sign out button, they will very easily be backed into the logout screen where they will be greeted with the login page once again

### Reset Password page Flowchart
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/reset%20password%20flowchart.png)
#### Description
After clicking the reset password selection on the welcome page, they will be redirected to the reset password page, which will be where the user will be able to change their password if they feel that it need to be switched. On screen, there will be three input text lines where the user must put in the the old password once, and new password twice for comfirmation. If all the credentials work with no errors, they will be redirected to the login page where their password is now changed to the new one.

        -If they put in two new passwords that did not match, they will have two options of:
            -Retrying once again
            -Cancelling, which will send them back to the welcome page
         -If they input a password that is shorter than six characters long, they will be asked to put in a longer password for security

## Site Structure

![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Site%20Structure.jpg)
