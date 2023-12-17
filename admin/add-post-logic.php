<?php
require './config/database.php';

if (isset($_POST['submit'])) {
    $author_id = $_SESSION['user-id'];
    if (isset($_POST['is_featured']))
        $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    else
        $is_featured = 0;
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category_id'], FILTER_SANITIZE_NUMBER_INT);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];

    if (!$title)
        $_SESSION['add-post'] = "Enter blog title!";
    elseif (!$category_id)
        $_SESSION['add-post'] = "Select blog category!";
    elseif (!$body)
        $_SESSION['add-post'] = "Enter blog description!";
    elseif (!$thumbnail['name'])
        $_SESSION['add-post'] = "Upload blog thumbnail image!";
    else {

        $time = time();
        $thumbnail_name = $time . $thumbnail["name"];
        $thumbnail_tmp_name = $thumbnail["tmp_name"];
        $thumbnail_destination_path = '../images/' . $thumbnail_name;

        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension = explode('.', $thumbnail_name);
        $extension = end($extension);

        if (in_array($extension, $allowed_files)) {
            if ($thumbnail["size"] < 2000000) {
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            } else {
                $_SESSION['add-post'] = "File size too big! Should be less than 2mb.";
            }
        } else {
            $_SESSION['add-post'] = "File should be .png, .jpg or .jpeg!";
        }
    }

    if (isset($_SESSION['add-post'])) {
        $_SESSION['add-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-post.php');
        die();
    } else {
        if ($is_featured == 1) {
            $make_all_is_featured_to_zero_query = "UPDATE posts SET is_featured=0";
            $make_all_is_featured_to_zero_result = mysqli_query($connection, $make_all_is_featured_to_zero_query);
        }

        $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES ('$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
        $result = mysqli_query($connection, $query);

        if (!mysqli_errno($connection)) {
            $_SESSION['add-post-success'] = "Blog created successfully!";
            header('location: ' . ROOT_URL . 'admin/');
            die();
        } else {
            $_SESSION['add-post-data'] = $_POST;
            $_SESSION['add-post'] = "Something went wrong! Try again...";
            header('location: ' . ROOT_URL . 'admin/add-post.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add-post.php');
    die();
}
?>