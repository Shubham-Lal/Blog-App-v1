<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include './partials/header.php';
?>

<!-- FEATURED POST -->
<section class="featured">
    <div class="container featured__container">
        <div class="post__thumbnail">
            <img src="./images/blog1.jpg" alt="Blog" />
        </div>
        <div class="post__info">
            <a href="category-posts.php" class="category__button">Street Art</a>
            <h2 class="post__title">
                <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis?</a>
            </h2>
            <p class="post__body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, iusto! Ex repellendus
                obcaecati quod, voluptas quasi, tempore consequuntur rerum maiores iure excepturi provident eligendi
                dicta deserunt, nobis a repellat incidunt?
            </p>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar12.jpg" alt="Author Avatar">
                </div>
                <div class="post__author-info">
                    <h5>By: Jane Doe</h5>
                    <small>November 13, 2023 - 12:29</small>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END FEATURED POST -->

<!-- POSTS -->
<section class="posts">
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