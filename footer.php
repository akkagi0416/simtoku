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
<?php wp_footer(); ?>
<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<script>
jQuery(function(){
    // スマホでnavの開閉
    jQuery( '#button' ).on( 'click', function(){
        jQuery( '.nav_wrap' ).slideToggle();
    });

    // 画面読み込み時 & 画面回転時
    jQuery( window ).on( 'load orientationchange',function(){   // resizeは入れない
        arrange_height();
    });

    // 画面リサイズ時(タイマーなのは読み込み回数を減らすため)
    var timer = false;
    jQuery( window ).resize(function(){
        if( timer !== false ){
            clearTimeout( timer );
        }
        timer = setTimeout( function(){
            arrange_height();
        }, 200 );
    });

    // sidebarのアイキャッチ画像の位置調整
    /*
    jQuery( 'aside .side_news li' ).each( function(){
        var h = jQuery(this).height();
        console.log( h );
        jQuery(this).children( '.news_img' ).height( h );
    });
    jQuery( 'aside .side_blog li' ).each( function(){
        var h = jQuery(this).height();
        console.log( h );
        jQuery(this).children( '.blog_img' ).height( h );
    });
     */

    // Google Analyticsのリンク回数取得
    // jQuery("a").click(function(e) {        
    //     var ahref = jQuery(this).attr('href');
    //     if (ahref.indexOf("simtoku.net") != -1 || ahref.indexOf("http") == -1 ) {
    //         ga('send', 'event', '内部リンク', 'クリック', ahref);
    //     } else { 
    //         ga('send', 'event', '外部リンク', 'クリック', ahref);
    //     }
    // });

});

// 関連記事の高さ調整
function arrange_height()
{
    var max_height = 0;
    jQuery( '.relation img' ).each( function(){
        height = jQuery(this).height();
        if( max_height < height ){
            max_height = height;
        }
    });
    jQuery( '.box_img' ).css( 'height', max_height );
}
</script>
</body>
</html>
