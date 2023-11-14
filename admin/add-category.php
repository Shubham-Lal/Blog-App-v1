<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Category | Blog v1</title>
    <link rel="stylesheet" href="../css/styles.css" />
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
            <a href="../index.php" class="nav__logo">
                BLOG APP
            </a>
            <ul class="nav__items">
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <!-- <li><a href="../signin.php">Login</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="../images/avatar2.jpg" alt="Avatar" />
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
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

    <section class="form__section">
        <div class="container form__section-container">
            <h2>New Category</h2>
            <div class="alert__message error">
                <p>This is an error message!</p>
            </div>
            <form action="">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button type="submit" class="btn">Add Category</button>
            </form>
        </div>
    </section>

    <script src="../js/main.js"></script>
</body>

</html>