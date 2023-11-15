<?php
include './partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        <div class="alert__message success">
            <p>This is a success message!</p>
        </div>
        <form action="">
            <input type="text" placeholder="Username or Email">
            <input type="password" placeholder="Password">
            <button type="submit" class="btn">Login</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>