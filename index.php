<?php
include './partials/header.php';

// Fetch featured post
$featured_query = "SELECT * FROM posts where is_featured=1 LIMIT 1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);

?>

<!-- FEATURED POST -->
<?php if (mysqli_num_rows($featured_result) == 1): ?>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="<?= ROOT_URL . "images/" . $featured['thumbnail'] ?>" alt="Blog" />
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
                            <?= 'By: ' . $author['firstname'] . $author['lastname'] ?>
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
<section class="posts <?= mysqli_num_rows($featured_result) < 1 ? 'no-featured' : '' ?>">
    <div class="container posts__container">
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog2.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Robotics</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar3.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog3.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Wildlife</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar4.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Ali</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog5.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Photography</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar5.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Milly Smith</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog6.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Food</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar7.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Sam</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog7.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Landscape</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar8.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Doe</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog8.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Landscape</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar9.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Willy</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog9.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Accessory</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar10.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Emma</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog10.jpg" alt="Blog">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Movie</a>
                <h3 class="post__title">
                    <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </h3>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum soluta, cupiditate
                    blanditiis perferendis, illum inventore nobis recusandae officiis, quasi quod doloremque
                    adipisci!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar11.jpg" alt="Author Avatar">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Howard</h5>
                        <small>November 1, 2023 - 17:40</small>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<!-- END POSTS -->

<!-- CATEGORIES -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <a href="category-posts.php" class="category__button">Movie</a>
        <a href="category-posts.php" class="category__button">Technology</a>
        <a href="category-posts.php" class="category__button">Wildlife</a>
        <a href="category-posts.php" class="category__button">Landscape</a>
        <a href="category-posts.php" class="category__button">Accessory</a>
        <a href="category-posts.php" class="category__button">Photography</a>
    </div>
</section>
<!-- END CATEGORIES -->

<?php
include './partials/footer.php';
?>