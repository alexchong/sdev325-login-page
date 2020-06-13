<?php

session_start();

$errors = array();

// database aliases
$host = 'localhost';
$u = 'root'; // login being used to access MySQL
$p = 'root'; // password for the above login
$db = 'sdev325'; // name of your database

// query aliases
// NOTE: ensure the values for the query variables both your own named database elements
$db_table = 'users'; // name of your table storing login credentials
$column_email = 'user_email'; // name of column in $db_table being used to store emails/usernames
$column_password = 'user_password'; // name of column in $db_table being used to store password hashes

// connect to MySQL server
$database = mysqli_connect($host, $u, $p, $db);

$email = mysqli_real_escape_string($database, $_POST['email']);
$password = mysqli_real_escape_string($database, $_POST['password']);

// globally used sql commands
$query_select_all_emails = mysqli_query($database,
    "SELECT * FROM $db_table WHERE $column_email='$email'");
$query_select_password_where_email = mysqli_query($database,
    "SELECT $column_password FROM $db_table WHERE $column_email='$email'");

if (isset($_POST['register'])) {
    $password_confirm = mysqli_real_escape_string($database, $_POST['password_confirm']);
    $parse_email_array = mysqli_fetch_assoc($sql_select_all_emails)['user_email'];

    if ($password != $password_confirm) {
        array_push($errors, 'Passwords do not match.');
    }

    if ($parse_email_arr === $email) {
            array_push($errors, 'Username already taken.');
    }

    if (count($errors) == 0) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $result = "INSERT INTO $db_table ($column_email, $column_password)
              VALUES ('$email', '$password_hash')";

        mysqli_query($database, $result);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'You are now logged in';
        header('location: index.php');
        exit();
    }
}

if (isset($_POST['login'])) {    
    $password_verify = password_verify($password, mysqli_fetch_assoc($query_select_password_where_email)['user_password']);

    if (empty($email)) {
        array_push($errors, 'Email address is required.');
    }

    if (empty($password)) {
        array_push($errors, 'Password is required.');
    }

    if (count($errors) == 0) {
        if ($password_verify) {
            $rowcount_query = mysqli_num_rows($query_select_all_emails);
            if ($rowcount_query == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = 'You are now logged in';
                header('location: index.php');
                exit();
            } else {
                array_push($errors, 'Invalid email and/or password.');
            }
        } else {
            array_push($errors, "An unknown error has occured.");
        }
    }
}
