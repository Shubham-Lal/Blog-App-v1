<?php
include './partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 0) {
        header('location: ' . ROOT_URL . 'blog.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<!-- HEADER -->
<header class="category__title">
    <h2>
        <?php
        $category_id = $id;
        $category_query = "SELECT * FROM categories where id=$category_id LIMIT 1";
        $category_result = mysqli_query($connection, $category_query);
        $category = mysqli_fetch_assoc($category_result);
        echo $category['title'] ?>
    </h2>
</header>
<!-- END HEADER -->

<!-- POSTS -->
<section class="posts">
    <div class="container posts__container">
        <?php while ($post = mysqli_fetch_assoc($result)): ?>
            <article class="post">
                <div class="post__thumbnail">
                    <a href="<?= ROOT_URL . 'post.php?id=' . $post['id'] ?>">
                        <img src="<?= ROOT_URL . 'images/' . $post['thumbnail'] ?>" alt="Blog">
                    </a>
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="<?= ROOT_URL . 'post.php?id=' . $post['id'] ?>">
                            <?= $post['title'] ?>
                        </a>
                    </h3>
                    <p class="post__body">
                        <?= substr($post['body'], 0, 150) ?>
                        <?= strlen($post['body']) > 150 ? "..." : "" ?>
                    </p>
                    <div class="post__author">
                        <?php
                        $author_id = $post['author_id'];
                        $author_query = "SELECT * FROM users where id=$author_id LIMIT 1";
                        $author_result = mysqli_query($connection, $author_query);
                        $author = mysqli_fetch_assoc($author_result);
                        ?>
                        <div class="post__author-avatar">
                            <img src="<?= ROOT_URL . 'images/' . $author['avatar'] ?>" alt="Author Avatar">
                        </div>
                        <div class="post__author-info">
                            <h5>
                                <?= 'By: ' . $author['firstname'] . ' ' . $author['lastname'] ?>
                            </h5>
                            <small>
                                <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                            </small>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile ?>
    </div>
</section>
<!-- END POSTS -->

<!-- CATEGORIES -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php
        $categories_query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC";
        $categories_result = mysqli_query($connection, $categories_query);
        while ($category = mysqli_fetch_assoc($categories_result)): ?>
            <a href="<?= ROOT_URL . 'category-posts.php?id=' . $category['id'] ?> " class="category__button">
                <?= $category['title'] ?>
            </a>
        <?php endwhile ?>
    </div>
</section>
<!-- END CATEGORIES -->

<?php
include './partials/footer.php';
?>