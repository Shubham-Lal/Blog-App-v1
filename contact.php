<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Blog v1</title>
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

    <section class="empty__page">
        <h1>Contact Us</h1>
    </section>

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