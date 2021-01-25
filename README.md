# Secure(ish) Login Page
An SDEV 325 course assignment to demonstrate input sanitization and parameterized statements over a PHP site; to help mitigate SQL injections and rainbow table attacks.

The code provided should **only** be for experimental or educational use in a sandbox environment, as it does not mitigate many misuse cases a commercial IAM product/service normally would.

## Requirements
- [MySQL](https://dev.mysql.com/downloads/installer/)
- [PHP](https://www.php.net/manual/en/install.php)

## Setup

---

1. Navigate the current directory to `sdev325-login-page`
```bash
$ cd path/to/sdev325-login-page
```
2. Open `connect.php` in a code editor, and overwrite the following lines according to your own named database and table values
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
3. Start the PHP built-in web server in the `sdev325-login-page` directory
```bash
$ php -S localhost:8888
```
