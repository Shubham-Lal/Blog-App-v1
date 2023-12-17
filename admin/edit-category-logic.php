<?php
require './config/database.php';

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$title) {
        $_SESSION['edit-category'] = "Invalid title!";
    } else if (!$description) {
        $_SESSION['edit-category'] = "Invalid description!";
    } else {
        $query = "UPDATE categories SET title='$title', description='$description' WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION['edit-category'] = "Couldn't update category! Try again...";
        } else {
            $_SESSION['edit-category-success'] = "Category $title updated successfully!";
        }
    }

    if (isset($_SESSION['edit-category'])) {
        $_SESSION['edit-category-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/edit-category.php?id=' . $id);
        die();
    } else {
        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-categories.php');
    die();
}
?>