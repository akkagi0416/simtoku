<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section>
                    <h3>メニュー</h3>
<?php
    wp_nav_menu();
?>
                </section>
            </div>
            <div class="col-md-6">
                <section>
                    <h3>このサイトについて</h3>
                    <ul>
                        <li><a href="<?php bloginfo( 'url' ); ?>/about/">このサイトについて</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <small>Copyright &copy; 2015 <?php bloginfo( 'name' ); ?> All Rights Reserved.</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
