<?php
include './partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM categories where id=$id";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $category = mysqli_fetch_assoc($result);

        if (isset($_SESSION['edit-category-data'])) {
            $title = $_SESSION['edit-category-data']['title'];
            $description = $_SESSION['edit-category-data']['description'];
            unset($_SESSION['edit-category-data']);
        } else {
            $title = $category['title'];
            $description = $category['description'];
        }
    } else {
        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-categories.php');
    die();
}
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Category</h2>
        <?php if (isset($_SESSION['edit-category'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['edit-category'];
                    unset($_SESSION['edit-category']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
            <input name="id" type="hidden" value="<?= $category['id'] ?>">
            <input name="title" type="text" value="<?= $title ?>" placeholder="Title">
            <textarea name="description" rows="4" placeholder="Description"><?= $description ?></textarea>
            <button name="submit" type="submit" class="btn">Update Category</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>