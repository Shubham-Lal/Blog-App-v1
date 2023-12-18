<?php
include './partials/header.php';

if (isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL);
    die();
}

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);

?>

<section class="form__section signin">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        <?php if (isset($_SESSION['signup-success'])): ?>
            <div class="alert__message success">
                <p>
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['signin'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form method="POST" action="<?= ROOT_URL ?>signin-logic.php">
            <input name="username_email" type="text" placeholder="Username or Email" value="<?= $username_email ?>">
            <input name="password" type="password" placeholder="Password" value="<?= $password ?>">
            <button name="submit" type="submit" class="btn">Login</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>