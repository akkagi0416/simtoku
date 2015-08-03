<footer>
    <div class="container">
<?php
    wp_nav_menu();
?>
        <ul>
            <li><a href="<?php bloginfo( 'url' ); ?>/about/">サイト情報</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/category/blog/">管理人ひとり言</a></li>
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
<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</body>
</html>
