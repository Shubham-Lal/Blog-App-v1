<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    if (!$firstname || !$lastname)
        $_SESSION['edit-user'] = "Invalid form input!";
    else if (!$is_admin)
        $_SESSION['edit-user'] = "Please select user role!";
    else {
        if ($is_admin == 2)
            $is_admin = 0;
        else
            $is_admin = 1;
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname', is_admin=$is_admin WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection))
            $_SESSION['edit-user'] = "Failed to update user! Try again...";
    }

    if (isset($_SESSION['edit-user'])) {
        $_SESSION['edit-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/edit-user.php?id=' . $id);
        die();
    } else {
        $_SESSION['edit-user-success'] = "User $firstname $lastname updated successfully!";
        header('location: ' . ROOT_URL . 'admin/manage-users.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-users.php');
    die();
}
?>