<?php
include './partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    if (!$user) {
        header('location: ' . ROOT_URL . 'admin/manage-users.php');
        die();
    }

    $firstname = $_SESSION['edit-user-data']['firstname'] ?? $user['firstname'];
    $lastname = $_SESSION['edit-user-data']['lastname'] ?? $user['lastname'];
    unset($_SESSION['edit-user-data']);
} else {
    header('location: ' . ROOT_URL . 'admin/manage-users.php');
    die();
}
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        <?php if (isset($_SESSION['edit-user'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['edit-user'];
                    unset($_SESSION['edit-user']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" method="POST">
            <input type="hidden" value="<?= $user['id'] ?>" name="id">
            <div class="input__row">
                <input type="text" value="<?= $firstname ?>" name="firstname" placeholder="First Name">
                <input type="text" value="<?= $lastname ?>" name="lastname" placeholder="Last Name">
            </div>
            <select name="userrole">
                <option value="0">Select User role</option>
                <option value="1">Admin</option>
                <option value="2">Author</option>
            </select>
            <button type="submit" name="submit" class="btn">Update User</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>