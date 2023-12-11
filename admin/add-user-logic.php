<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    // Retrieve "add-user.php" page data - "submit" button was clicked
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];

    // Validate input
    if (!$firstname)
        $_SESSION['add-user'] = "Please enter User's first name!";
    elseif (!$lastname)
        $_SESSION['add-user'] = "Please enter User's last name!";
    elseif (!$username)
        $_SESSION['add-user'] = "Please enter User's username!";
    elseif (!$email)
        $_SESSION['add-user'] = "Please enter User's email!";
    elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8)
        $_SESSION['add-user'] = "Password should be 8+ characters!";
    elseif (!$is_admin)
        $_SESSION['add-user'] = "Please select User's role!";
    elseif (!$avatar['name'])
        $_SESSION['add-user'] = "Please upload User's avatar!";
    else {
        // Check password
        if ($createpassword !== $confirmpassword)
            $_SESSION['add-user'] = "Passwords do not match!";
        else {
            // Hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // Check Username & Email availability
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0)
                $_SESSION['add-user'] = "Username or Email already exists!";
            else {
                // Avatar workaround
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../images/' . $avatar_name;

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
                        $_SESSION['add-user'] = "File size too big! Should be less than 1mb.";
                } else
                    $_SESSION['add-user'] = "File should be .png, .jpg or .jpeg!";
            }
        }
    }

    // Redirect to "add-user.php" if any error - $_SESSION['add-user']
    if (isset($_SESSION['add-user'])) {
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
    } else {
        if ($is_admin == 2) $is_admin = 0;
        else $is_admin = 1;
        // Create new User
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', '$is_admin')";

        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            // Redirect to Manage Users page - No error
            $_SESSION['add-user-success'] = "New user $firstname $lastname added successfully!";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }
} else {
    // Redirect back to "add-user.php" page - "submit" button was not clicked
    header('location: ' . ROOT_URL . 'admin/add-user.php');
    die();
}

?>