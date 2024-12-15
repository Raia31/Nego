<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if passwords match
    if ($password === $confirm_password) {
        // Path to the users file
        $users_file = 'users.txt';

        // Check if the users file exists, if not create it
        if (!file_exists($users_file)) {
            file_put_contents($users_file, "");
        }

        // Read the existing users from the file
        $users = file($users_file, FILE_IGNORE_NEW_LINES);

        // Check for existing username
        foreach ($users as $user) {
            list($existing_username, $existing_password) = explode(':', $user);
            if ($existing_username === $username) {
                die("Username already exists. Please choose another.");
            }
        }

        // Append the new user to the file
        $new_user = $username . ':' . $password . "\n";
        file_put_contents($users_file, $new_user, FILE_APPEND);

        echo "Sign up successful! <a href='login.html'>Login here</a>";
    } else {
        echo "Passwords do not match. Please try again.";
    }
} else {
    echo "No form submitted.";
}
?>
