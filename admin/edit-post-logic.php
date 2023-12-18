<?php
require './config/database.php';

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    if (isset($_POST['is_featured']))
        $is_featured = 1;
    else
        $is_featured = 0;
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category_id'], FILTER_SANITIZE_NUMBER_INT);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];

    if (!$title)
        $_SESSION['edit-post'] = "Enter blog title!";
    elseif (!$category_id)
        $_SESSION['edit-post'] = "Select blog category!";
    elseif (!$body)
        $_SESSION['edit-post'] = "Enter blog description!";
    else {
        // echo "Post ID: $id, Author ID: $author_id, Is Featured: $is_featured, Title: $title, Category ID: $category_id, Body: $body";

        if ($thumbnail['name']) {
            $previous_thumbnail_path = '../images/' . $previous_thumbnail_name;
            if ($previous_thumbnail_path) {
                unlink($previous_thumbnail_path);
            }

            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../images/' . $thumbnail_name;

            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = explode('.', $thumbnail_name);
            $extension = end($extension);
            if (in_array($extension, $allowed_files)) {
                if ($thumbnail["size"] < 2000000) {
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                } else {
                    $_SESSION['edit-post'] = "File size too big! Should be less than 2mb.";
                }
            } else {
                $_SESSION['edit-post'] = "File should be .png, .jpg or .jpeg!";
            }
        }
    }

    if (isset($_SESSION['edit-post'])) {
        $_SESSION['edit-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/edit-post.php?id=' . $id);
        die();
    } else {
        if ($is_featured == 1) {
            $make_all_is_featured_to_zero_query = "UPDATE posts SET is_featured=0";
            $make_all_is_featured_to_zero_result = mysqli_query($connection, $make_all_is_featured_to_zero_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id=$category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        $_SESSION['edit-post-success'] = "Blog updated successfully!";
        header('location: ' . ROOT_URL . 'admin/');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/');
    die();
}
?>