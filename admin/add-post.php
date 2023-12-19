<?php
include './partials/header.php';

$query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC";
$categories = mysqli_query($connection, $query);

if (isset($_SESSION['add-post-data'])) {
    $title = $_SESSION['add-post-data']['title'];
    $body = $_SESSION['add-post-data']['body'];
    unset($_SESSION['add-post-data']);
} else {
    $title = '';
    $body = '';
}
?>

<section class="dashboard">
    <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-btn">
            <i class="uil uil-angle-right-b"></i>
        </button>
        <button class="sidebar__toggle" id="hide__sidebar-btn">
            <i class="uil uil-angle-left-b"></i>
        </button>
        <aside>
            <ul>
                <li>
                    <a href="<?= ROOT_URL ?>admin/add-post.php" class="active">
                        <i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="<?= ROOT_URL ?>admin/">
                        <i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <?php if (isset($_SESSION['user_is_admin'])): ?>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-user.php">
                            <i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-users.php">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-category.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-categories.php">
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>New Post</h2>
            <?php if (isset($_SESSION['add-post'])): ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['add-post'];
                        unset($_SESSION['add-post']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>admin/add-post-logic.php" method="POST" enctype="multipart/form-data">
                <?php if (isset($_SESSION['user_is_admin'])): ?>
                    <div class="form__control inline">
                        <label for="is_featured" checked>Featured</label>
                        <input name="is_featured" type="checkbox" id="is_featured" checked value="1">
                    </div>
                <?php endif ?>
                <input name="title" type="text" placeholder="Title" value="<?= $title ?>">
                <select name="category_id">
                    <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                        <option value="<?= $category['id'] ?>">
                            <?= $category['title'] ?>
                        </option>
                    <?php endwhile ?>
                </select>
                <textarea name="body" rows="10" placeholder="Body"><?= $body ?></textarea>
                <div class="form__control">
                    <label for="thumbnail" checked>Upload Thumbnail</label>
                    <input name="thumbnail" type="file" id="thumbnail">
                </div>
                <button name="submit" type="submit" class="btn">Add Post</button>
            </form>
        </main>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>

<!-- <section class="form__section">
    <div class="container form__section-container">
        <h2>New Post</h2>
        <div class="alert__message success">
            <p>This is a success message!</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="1">Travel</option>
                <option value="2">Movie</option>
                <option value="3">Street Art</option>
                <option value="4">Photography</option>
                <option value="5">Food</option>
            </select>
            <textarea rows="10" placeholder="Body"></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" checked="true">
                <label for="is_featured" checked>Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail" checked>Upload Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section> -->