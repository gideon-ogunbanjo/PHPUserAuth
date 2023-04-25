# PHPUserAuth
This is a login and signup system with PHP
### Overview:
PHPUserAuth is a web-based authentication system that enables users to create an account, log in and log out of their account. This system uses PHP programming language to interact with a MySQL database to store user details.

### Features:

- User registration
- User login and logout
- Password hashing
- Session management
- Error handling

### Requirements:

- PHP 7.0 or higher
- MySQL 5.6 or higher

### Installation:

- Download the PHPUserAuth source code from the Github repository.
- Extract the files to your web server's document root directory.
- Create a new MySQL database for PHPUserAuth and import the database.sql file.
- Open the config.php file and update the database details.
- Start using the system by accessing the login.php file.

### User Registration:

Open the signup.php file and enter your username, email address and password.
The system will validate the inputs and check if the email address is not already taken.
If the inputs are valid, the system will hash the password and store the user details in the MySQL database.
A success message will be displayed if the registration is successful.

### User Login:

Open the login.php file and enter your email address and password.
The system will check if the email address exists and if the password matches the hashed password in the database.
