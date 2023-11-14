<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category | Blog v1</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">
                BLOG APP
            </a>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="signin.php">Login</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar2.jpg" alt="Avatar" />
                    </div>
                    <ul>
                        <li><a href="./admin/dashboard.php">Dashboard</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn">
                <i class="uil uil-list-ui-alt"></i>
            </button>
            <button id="close__nav-btn">
                <i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HEADER -->
    <header class="category__title">
        <h2>Street Art</h2>
    </header>
    <!-- END HEADER -->

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

    <!-- FOOTER -->
    <footer>
        <div class="footer__socials">
            <a href="https://github.com/Shubham-Lal" target="_blank"><i class="uil uil-github"></i></a>
            <a href="https://linkedin.com/in/shubham-lal" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://youtube.com/@poorCERTY" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://x.com/shubhamlal_dev" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="mailto: im.shubhamlal@gmail.com" target="_blank"><i class="uil uil-envelope"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">Movie</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Wildlife</a></li>
                    <li><a href="#">Landscape</a></li>
                    <li><a href="#">Accessory</a></li>
                    <li><a href="#">Photography</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Online Support</a></li>
                    <li><a href="#">Call Numbers</a></li>
                    <li><a href="#">Emails</a></li>
                    <li><a href="#">Social Support</a></li>
                    <li><a href="#">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="#">Safety</a></li>
                    <li><a href="#">Repair</a></li>
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; BLOG APP</small>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="./js/main.js"></script>
</body>

</html>