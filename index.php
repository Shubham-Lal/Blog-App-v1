<?php
include './partials/header.php';

// Fetch featured post
$featured_query = "SELECT * FROM posts where is_featured=1 LIMIT 1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);

// Fetch posts
$posts_query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 9";
$posts_result = mysqli_query($connection, $posts_query);

// Fetch categories
$categories_query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC";
$categories_result = mysqli_query($connection, $categories_query);
?>

<!-- FEATURED POST -->
<?php if (mysqli_num_rows($featured_result) == 1): ?>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <a href="<?= ROOT_URL . 'post.php?id=' . $featured['id'] ?>">
                    <img src="<?= ROOT_URL . "images/" . $featured['thumbnail'] ?>" alt="Blog" />
                </a>
            </div>
            <div class="post__info">
                <?php
                $category_id = $featured['category_id'];
                $category_query = "SELECT * FROM categories where id=$category_id LIMIT 1";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                ?>
                <a href="<?= ROOT_URL . 'category-posts.php?id=' . $category['id'] ?>" class="category__button">
                    <?= $category['title'] ?>
                </a>
                <h2 class="post__title">
                    <a href="<?= ROOT_URL . 'post.php?id=' . $featured['id'] ?>">
                        <?= $featured['title'] ?>
                    </a>
                </h2>
                <p class="post__body">
                    <?= substr($featured['body'], 0, 500) ?>
                    <?= strlen($featured['body']) > 500 ? "..." : "" ?>
                </p>
                <div class="post__author">
                    <?php
                    $author_id = $featured['author_id'];
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
                            <?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<!-- END FEATURED POST -->

<!-- POSTS -->
<?php if (mysqli_num_rows($posts_result) > 0): ?>
    <section class="posts <?= mysqli_num_rows($featured_result) < 1 ? 'no-featured' : '' ?>">
        <div class="container posts__container">
            <?php while ($post = mysqli_fetch_assoc($posts_result)): ?>
                <article class="post">
                    <div class="post__thumbnail">
                        <a href="<?= ROOT_URL . 'post.php?id=' . $post['id'] ?>">
                            <img src="<?= ROOT_URL . 'images/' . $post['thumbnail'] ?>" alt="Blog">
                        </a>
                    </div>
                    <div class="post__info">
                        <?php
                        $category_id = $post['category_id'];
                        $category_query = "SELECT * FROM categories where id=$category_id LIMIT 1";
                        $category_result = mysqli_query($connection, $category_query);
                        $category = mysqli_fetch_assoc($category_result);
                        ?>
                        <a href="<?= ROOT_URL . 'category-posts.php?id=' . $category['id'] ?>" class="category__button">
                            <?= $category['title'] ?>
                        </a>
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
<?php else: ?>
    <section class="posts <?= mysqli_num_rows($featured_result) < 1 ? 'no-featured' : '' ?>">
        <div class="container">
            <div class="alert__message error">
                <p>No blogs yet!</p>
            </div>
        </div>
    </section>
<?php endif ?>
<!-- END POSTS -->

<!-- CATEGORIES -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
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