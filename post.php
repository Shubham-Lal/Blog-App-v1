<?php
include './partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $post = mysqli_fetch_assoc($result);
    } else {
        header('location: ' . ROOT_URL . 'blog.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<!-- SINGLE POST -->
<section class="singlepost">
    <div class="container singlepost__container">
        <h2>
            <?= $post['title'] ?>
        </h2>
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
        <div class="singlepost__thumbnail">
            <img src="<?= ROOT_URL . 'images/' . $post['thumbnail'] ?>" alt="Blog">
        </div>
        <p>
            <?= $post['body'] ?>
        </p>
    </div>
</section>
<!-- END SINGLE POST -->

<?php
include './partials/footer.php';
?>