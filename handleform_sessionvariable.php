<?php
session_start();

// LOGIN
if (isset($_POST['loginBtn'])) {
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']);  // Storing password as hashed value (MD5)

    // Save the data in session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Redirect back to the main page
    header('Location: index_sessionvariable.php');
    exit();  // Ensure no further code is executed after the redirect
}
