<!-- FOOTER -->
<footer>
    <div class="footer__socials">
        <a href="https://github.com/Shubham-Lal" target="_blank"><i class="uil uil-github"></i></a>
        <a href="https://linkedin.com/in/shubham-lal" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="https://youtube.com/@poorCERTY" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://x.com/shubhamlal_dev" target="_blank"><i class="uil uil-twitter"></i></a>
        <a href="mailto:contact@shubhamlal.in" target="_blank"><i class="uil uil-envelope"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <?php
                $categories_query = "SELECT * FROM categories ORDER BY CASE WHEN id = 1 THEN 0 ELSE 1 END, title ASC LIMIT 5";
                $categories_result = mysqli_query($connection, $categories_query);
                while ($category = mysqli_fetch_assoc($categories_result)): ?>
                    <li><a href="<?= ROOT_URL . 'category-posts.php?id=' . $category['id'] ?>"><?= $category['title'] ?></a></li>
                <?php endwhile ?>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="#">Online Support</a></li>
                <li><a href="#">Call Numbers</a></li>
                <li><a href="#">Emails</a></li>
                <li><a href="#">Social Support</a></li>
                <li><a href="#">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Repair</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">Categories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; BLOG APP</small>
    </div>
</footer>
<!-- END FOOTER -->

<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>