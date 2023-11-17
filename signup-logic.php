<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    // Retrieve "signup.php" page data - "submit" button was clicked
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // Validate input
    if (!$firstname)
        $_SESSION['signup'] = "Please enter your First Name!";
    elseif (!$lastname)
        $_SESSION['signup'] = "Please enter your Last Name!";
    elseif (!$username)
        $_SESSION['signup'] = "Please enter your Username!";
    elseif (!$email)
        $_SESSION['signup'] = "Please enter your Email!";
    elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8)
        $_SESSION['signup'] = "Password should be 8+ characters!";
    elseif (!$avatar['name'])
        $_SESSION['signup'] = "Please upload your avatar!";
    else {
        // Check password
        if ($createpassword !== $confirmpassword)
            $_SESSION['signup'] = "Passwords do not match!";
        else {
            // Hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // Check Username & Email availability
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0)
                $_SESSION['signup'] = "Username or Email already exists!";
            else {
                // Avatar workaround
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // Check upload file is image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);
                if (in_array($extension, $allowed_files)) {
                    // Check image is not too large
                    if ($avatar['size'] < 1000000) {
                        // Upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else
                        $_SESSION['signup'] = "File size too big! Should be less than 1mb.";
                } else
                    $_SESSION['signup'] = "File should be .png, .jpg or .jpeg!";
            }
        }
    }

    // Redirect to "signup.php" if any error - $_SESSION['signup']
    if (isset($_SESSION['signup'])) {
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else {
        // Create new User
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";
        // $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=0";

        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            // Redirect to Login page - No error
            $_SESSION['signup-success'] = "Account created! Please login.";
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    }
} else {
    // Redirect back to "signup.php" page - "submit" button was not clicked
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}

?>