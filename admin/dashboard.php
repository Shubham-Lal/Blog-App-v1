<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Blog v1</title>
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

    <section class="dashboard">
        <div class="container dashboard__container">
            <button class="sidebar__toggle" id="show__sidebar-btn">
                <i class="uil uil-angle-right-b"></i>
            </button>
            <button class="sidebar__toggle" id="hide__sidebar-btn">
                <i class="uil uil-angle-left-b"></i>
            </button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php" class="active">
                            <i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php">
                            <i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php">
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Posts</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Catgeory</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                            <td>Wildlife</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Landscape</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing.</td>
                            <td>Movie</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam!</td>
                            <td>Landscape</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing.</td>
                            <td>Movie</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                            <td>Wildlife</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Landscape</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>

    <script src="../js/main.js"></script>
</body>

</html>