<?php
include './partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <div class="alert__message error">
            <p>This is an error message!</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <div class="input__name">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
            </div>
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email Address">
            <input type="password" placeholder="Create Password">
            <input type="password" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Register</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>