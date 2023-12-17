<?php
require './config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $query = "DELETE FROM categories WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        $_SESSION['delete-category-success'] = "Category deleted successfully!";
        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        die();
    } else {
        $_SESSION['delete-category'] = "Category doesn't exists!";
        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-categories.php');
    die();
}
?>