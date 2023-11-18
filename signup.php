<?php
include './partials/header.php';

if (isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL);
    die();
}

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
unset($_SESSION['signup-data']);

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <?php if (isset($_SESSION['signup'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form method="POST" action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data">
            <div class="input__row">
                <input name="firstname" type="text" placeholder="First Name" value="<?= $firstname ?>">
                <input name="lastname" type="text" placeholder="Last Name" value="<?= $lastname ?>">
            </div>
            <input name="username" type="text" placeholder="Username" value="<?= $username ?>">
            <input name="email" type="email" placeholder="Email Address" value="<?= $email ?>">
            <div class="input__row">
                <input name="createpassword" type="password" placeholder="Create Password"
                    value="<?= $createpassword ?>">
                <input name="confirmpassword" type="password" placeholder="Confirm Password"
                    value="<?= $confirmpassword ?>">
            </div>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input name="avatar" type="file" id="avatar">
            </div>
            <button name="submit" type="submit" class="btn">Register</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>