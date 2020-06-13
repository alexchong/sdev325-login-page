# Secure(ish) Login Page
An SDEV 325 course assignment to demonstrate input sanitization and parameterized statements over a PHP site; to help prevent code injections and password attacks.

The code provided should **only** be for experimental or educational use in a sandbox environment, as it does not mitigate a plethora of misuse cases a commercial IAM product/service normally would.

## Setup

**_Disclaimer:_** This setup guide was made with the intent that you already have a modern or latest version of MySQL installed on your machine, and that you know basic MySQL commands.

In either cases, refer to this [install tutorial](https://www.w3resource.com/mysql/mysql-installation-on-linux-and-windows.php) or [SQL tutorial](https://www.w3schools.com/sql/) for further guidance before proceeding forward.

---

1. Install the latest version of PHP on your machine
2. From your command-line interface, change the current directory to the `sdev325-login-page` folder
```bash
$ cd path/to/sdev325-login-page
```
3. Open `connect.php` in your code editor and write over the following lines according to your own named MySQL database and table values
```php
// database aliases
$host = 'localhost';
$u = 'root'; // login being used to access MySQL
$p = 'root'; // password for the above login
$db = 'sdev325'; // name of your database

// query aliases
// NOTE: ensure the values for the query variables both your own named database elements
$db_table = 'users'; // name of your table storing login credentials
$column_email = 'user_email'; // name of column in $db_table being storing emails/usernames
$column_password = 'user_password'; // name of column in $db_table storing password hashes
```
4. Start the PHP built-in web server in the `sdev325-login-page` directory
```bash
$ php -S localhost:8888
```
