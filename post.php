<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Blog v1</title>
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

    <!-- SINGLE POST -->
    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores!</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar12.jpg" alt="Author Avatar">
                </div>
                <div class="post__author-info">
                    <h5>By: Jane Doe</h5>
                    <small>November 13, 2023 - 12:29</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="./images/blog1.jpg" alt="Blog">
            </div>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam alias debitis velit eaque quos iure
                autem rerum ab saepe, sint vero omnis quam laboriosam fuga vitae, deserunt facilis cum ipsam error quia
                amet excepturi? Earum esse libero hic cum ratione!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo fuga accusantium quas suscipit quo!
                Quibusdam nesciunt quidem enim vel, tenetur repellendus quisquam recusandae, illo, earum id veniam
                optio! Libero nihil possimus, architecto ipsam tempore recusandae ratione. Molestiae, accusantium sint?
                Dolore iste officia totam explicabo harum delectus ab magni modi provident.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis commodi quam molestias, quo minus
                illo incidunt! Reprehenderit ipsam sit voluptate asperiores dicta, dolore facilis cum placeat nesciunt?
                Molestias placeat vitae illo aliquid, neque dignissimos officiis aspernatur perspiciatis quod in dicta
                esse temporibus quidem, consectetur repellendus facilis officia cum eligendi adipisci quis alias
                repellat quas fugiat. Itaque odio voluptatibus ex officiis.
            </p>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis non laborum illo exercitationem
                debitis nam possimus assumenda quas sequi dignissimos amet itaque sapiente, saepe, magnam quia quis quae
                doloremque voluptate.
            </p>
        </div>
    </section>
    <!-- END SINGLE POST -->

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