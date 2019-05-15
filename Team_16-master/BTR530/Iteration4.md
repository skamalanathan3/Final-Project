#Iteration4

# Iteration 4

# Class Diagram
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Class%20Diagram%20Iteration4.PNG)

## Class diagram description

In iteration 3, the main thing we had done was start one of the next biggest components to our project, being allowing the user to input expense and have to have it displayed for them to see it.

For interation 4, we had caluclations implemented to this so that a value would be outputted showing the user how much money will be remaining, etc. Not only that, but we had also included a section were users may input wages for how long they have worked for and this information will not only display to them, however it will also be recorded into the database and output a calculated value using the values that it was provided. All this information will be provided to the user on the same page.

Looking at the class diagram now, I had added classes for wages and expenses. Both these classes are directly associated with the amount of money there is in general regarding the company. Depending on how much the user inputs for wages and expense will deduct from the amount of cash the company has. A user can input zero or more expenses, and the user can input zero or more wages.

# Test Plan

## Flow Charts for Scenarios

### Wages
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Wages.png)
#### Description

For the final interation, we decided to tackle what seemed to be the next important issue, being the wages and how much an employee will be getting paid. Wages is based on different factors depending on what your job title and is how many hours you work for. We will be going much more in depth in a future iteration in the next semester, however 

So in this diagram, everyone will start off at the login page and when they put in their correct credentials, it will log them into their account

    -If they put in incorrect credentials, it will ask for them to retry again

They will be greeted with the welcome page which will offer them multiple different options to choose from. When a the employee chooses to create a expense report, it will redirect them to a brand new page that we developed where they can report this information. These are the conditions to the page:

        -If the user does not put in the information correctly, an error message will pop up underneath the textboxes saying that there must be a value
        -The amount value MUST also be a decimal value
        -If the user inputs values for some textboxes but leaves some empty, will respond with retry message. Must but 0's if not in use

They may also logout from the welcome page back to the login page as they please.


### Expense  
![alt text](https://github.com/SenecaCollegeBTSProjects/Team_16/blob/master/BTR530/images/Expense_Calculated.png)
#### Description
On our third iteration, we were able to begin working on allowing the user to input their expenses for whenever they went to purchase something for the company whether it be more supply or just a side expense. Last time we just allowed the user to input whatever value and would record the information into the database. This time around, we would allow the user to input information, however this time it would calculate all the values and other fees and include balanaces from the previous day to output a value that considers all this. The steps to input theses values are as follows in the Flowchart :

Everyone will start off at the login page and when they put in their correct credentials, it will log them into their account

    -If they put in incorrect credentials, it will ask for them to retry again

They will be greeted with the welcome page which will offer them multiple different options to choose from. When a the employee chooses to create a expense report, it will redirect them to a brand new page that we developed where they can report this information. These are the conditions to the page:

        -If the user does not put in the information correctly, an error message will pop up underneath the textboxes saying that there must be a value
        -The amount value MUST also be a decimal value
        -If the user inputs values for some textboxes but leaves some empty, will respond with retry message. Must but 0's if not in use

**Once the information is input, it will be recorded into the database and a calucated value will be displayed to the user**

They may also logout from the welcome page back to the login page as they please.

