<?php
// Path to the users file
$users_file = 'users.txt';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the users file exists
    if (!file_exists($users_file)) {
        echo "Users file not found.";
        exit();
    }

    // Read the existing users from the file
    $users = file($users_file, FILE_IGNORE_NEW_LINES);

    // Check for valid user credentials
    $valid_login = false;
    foreach ($users as $user) {
        list($existing_username, $existing_password) = explode(':', $user);
        if ($existing_username === $username && $existing_password === $password) {
            $valid_login = true;
            break;
        }
    }

    // If valid, redirect to home page, else show error
    if ($valid_login) {
        // Successful login, redirect to home page
        header('Location: index.html');
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
