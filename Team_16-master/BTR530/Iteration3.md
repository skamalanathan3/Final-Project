# Iteration 3

# Class Diagram
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Class%20Diagram.PNG)

## Class diagram description

In interation three, we build upon what we have constructed last week. In the previous week, we'd allowed the employee or manager to input their denominations into put in data into the database that we have created for the store. This week, the program will now calculate the important values that the business needs being petty cash, previous day petter cash, and a few others.

Ontop of that, there will be alerts telling the user when they complete a task. This is to ensure that the message is clear when something is done.

# Test Plan

## Flow Charts for Scenarios

### Expense Report 
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Expense.png)
#### Description
After our second iteration, we have decided to further the development of our project by including the ability to allow the employee to put an expense. The information provided by the user will be recorded onto the database when they submit the data. Some information is passed down from the previous day, and will affect the current/daily sales report.

So in this diagram, everyone will start off at the login page and when they put in their correct credentials, it will log them into their account

    -If they put in incorrect credentials, it will ask for them to retry again

They will be greeted with the welcome page which will offer them multiple different options to choose from. When a the employee chooses to create a expense report, it will redirect them to a brand new page that we developed where they can report this information. These are the conditions to the page:

        -If the user does not put in the information correctly, an error message will pop up underneath the textboxes saying that there must be a value
        -The amount value MUST also be a decimal value
        -If the user inputs values for some textboxes but leaves some empty, will respond with retry message. Must but 0's if not in use

They may also logout from the welcome page back to the login page as they please.

### Calculated Values
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Calculated%20Values.png)
#### Description

From the previous iteration, we allowed the user to input information from the daily sales onto the database. While the user is still allowed to do that, now their numbers will mean something. We will have embedded formulas that will caluclated different values based on what the user inputs into the textboxes. There are several results that will show, from petty cash to total cash. Firstly, they must login and pass the welcome page.

    -If they put in incorrect credentials, it will ask for them to retry again
    
After this, they must fill in the information as they would regularily. There are certain restrictions to filling out the page.

        -If the user does not put in the information correctly, an error message will pop up underneath the textboxes saying that there must be a value
        -The amount value MUST also be a decimal value
        -If the user inputs values for some textboxes but leaves some empty, will respond with retry message. Must but 0's if not in use

After this when they submit the information, our program will calculate the result from all the information provided and it will display the calculated values to the user. When they are done, the user may log out as they wish.
