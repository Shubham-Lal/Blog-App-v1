<?php
include './partials/header.php';

// Enable error reporting.
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <div class="alert__message error">
            <p>This is an error message!</p>
        </div>
        <form method="POST" action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data">
            <div class="input__name">
                <input name="firstname" type="text" placeholder="First Name">
                <input name="lastname" type="text" placeholder="Last Name">
            </div>
            <input name="username" type="text" placeholder="Username">
            <input name="email" type="email" placeholder="Email Address">
            <input name="createpassword" type="password" placeholder="Create Password">
            <input name="confirmpassword" type="password" placeholder="Confirm Password">
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