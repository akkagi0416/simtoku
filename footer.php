<footer>
    <div class="container">
<?php
    wp_nav_menu();
?>
        <ul>
            <li><a href="<?php bloginfo( 'url' ); ?>/about/">サイト情報</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/about/#contact">お問い合わせ</a></li>
        </ul>
        <small>Copyright &copy; 2015 <?php bloginfo( 'name' ); ?> All Rights Reserved.</small>
    </div>
</footer>
<script>
jQuery(function(){
    jQuery( '#button' ).on( 'click', function(){
        jQuery( '.nav_wrap' ).slideToggle();
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>
