<?php
include 'partials/header.php';

$search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($search) {
    $query = "SELECT * FROM posts WHERE title like '%$search%' OR body like '%$search%' ORDER BY date_time DESC";
    $result = mysqli_query($connection, $query);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<!-- SEARCH -->
<section class="search__bar">
    <form class="container search__bar-container" action="<?= ROOT_URL ?>search.php" method="GET">
        <div>
            <i class="uil uil-search"></i>
            <input value="<?= $search ?? null ?>" type="search" name="search" placeholder="Search Blogs" />
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>
<!-- END SEARCH -->

<!-- POSTS -->
<?php if (mysqli_num_rows($result) > 0): ?>
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
    <section class="posts">
        <div class="container">
            <div class="alert__message error lg">
                <p>No blogs related to
                    <?= $search ?>
                </p>
            </div>
        </div>
    </section>
<?php endif ?>
<!-- END POSTS -->

<!-- CATEGORIES -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php
        $categories_query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC";
        $categories_result = mysqli_query($connection, $categories_query);
        while ($category = mysqli_fetch_assoc($categories_result)): ?>
            <a href="<?= ROOT_URL . 'category-posts.php?id=' . $category['id'] ?>" class="category__button">
                <?= $category['title'] ?>
            </a>
        <?php endwhile ?>
    </div>
</section>
<!-- END CATEGORIES -->

<?php
include 'partials/footer.php';
?>