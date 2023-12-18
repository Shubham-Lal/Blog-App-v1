<?php
include './partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts where id=$id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $category_query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC";
        $categories = mysqli_query($connection, $category_query);

        $post = mysqli_fetch_assoc($result);

        if (isset($_SESSION['edit-post-data'])) {
            if (isset($_SESSION['edit-post-data']['is_featured']))
                $is_featured = 1;
            else
                $is_featured = 0;

            $title = $_SESSION['edit-post-data']['title'];
            $category_id = $_SESSION['edit-post-data']['category_id'];
            $body = $_SESSION['edit-post-data']['body'];
            unset($_SESSION['edit-post-data']);
        } else {
            $is_featured = $post['is_featured'];
            $title = $post['title'];
            $category_id = $post['category_id'];
            $body = $post['body'];
        }
    } else {
        header('location: ' . ROOT_URL . 'admin/');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/');
    die();
}
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <?php if (isset($_SESSION['edit-post'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['edit-post'];
                    unset($_SESSION['edit-post']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" method="POST" enctype="multipart/form-data">
            <input value="<?= $post['id'] ?>" name="id" type="hidden">
            <input value="<?= $post['thumbnail'] ?>" name="previous_thumbnail_name" type="hidden">
            <?php if (isset($_SESSION['user_is_admin'])): ?>
                <div class="form__control inline">
                    <label for="is_featured" checked>Featured</label>
                    <input name="is_featured" type="checkbox" id="is_featured" <?= $is_featured ? 'checked' : '' ?>>
                </div>
            <?php endif ?>
            <input value="<?= $title ?>" name="title" type="text" placeholder="Title">
            <select name="category_id">
                <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                    <option value="<?= $category['id'] ?>" <?= $category_id == $category['id'] ? 'selected' : '' ?>>
                        <?= $category['title'] ?>
                    </option>
                <?php endwhile ?>
            </select>
            <textarea name="body" rows="10" placeholder="Body"><?= $body ?></textarea>
            <div class="form__control">
                <label for="thumbnail" checked>Change Thumbnail</label>
                <input name="thumbnail" type="file" id="thumbnail">
            </div>
            <button name="submit" type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>