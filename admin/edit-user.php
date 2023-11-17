<?php
include './partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        <form action="" enctype="multipart/form-data">
            <div class="input__row">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
            </div>
            <!-- <input type="text" placeholder="Username">
                <input type="email" placeholder="Email Address">
                <input type="password" placeholder="Create Password">
                <input type="password" placeholder="Confirm Password"> -->
            <select>
                <option value="1">Author</option>
                <option value="2">Admin</option>
            </select>
            <!-- <div class="form__control">
                    <label for="avatar" checked>Change Avatar</label>
                    <input type="file" id="avatar">
                </div> -->
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>