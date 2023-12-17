<?php
include './partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form action="" enctype="multipart/form-data">
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" checked="true">
                <label for="is_featured" checked>Featured</label>
            </div>
            <input type="text" placeholder="Title">
            <select>
                <option value="1">Travel</option>
                <option value="2">Movie</option>
                <option value="3">Street Art</option>
                <option value="4">Photography</option>
                <option value="5">Food</option>
            </select>
            <textarea rows="10" placeholder="Body"></textarea>
            <div class="form__control">
                <label for="thumbnail" checked>Change Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>