<?php
include './partials/header.php';

$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;
unset($_SESSION['add-user-data']);

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <?php if (isset($_SESSION['add-user'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-user-logic.php" method="POST" enctype="multipart/form-data">
            <div class="input__row">
                <input type="text" name="firstname" placeholder="First Name" value="<?= $firstname ?>">
                <input type="text" name="lastname" placeholder="Last Name" value="<?= $lastname ?>">
            </div>
            <input type="text" name="username" placeholder="Username" value="<?= $username ?>">
            <input type="email" name="email" placeholder="Email Address" value="<?= $email ?>">
            <input type="password" name="createpassword" placeholder="Create Password" value="<?= $createpassword ?>">
            <input type="password" name="confirmpassword" placeholder="Confirm Password" value="<?= $confirmpassword ?>">
            <select name="userrole">
                <option value="0">Select User role</option>
                <option value="1">Admin</option>
                <option value="2">Author</option>
            </select>
            <div class="form__control">
                <label for="avatar" checked>Upload Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Add User</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>