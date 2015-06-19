<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo $post->post_name; ?>">
        <header>
            <div class="container">
<?php
    if( is_front_page() ) :
?>
                <h1 class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
<?php
    else :
?>
                <p class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></p>
<?php
    endif;
?>
<!--
                <p class="search"><i class="fa fa-search"></i></p>
                <form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" value name="s" placeholder="検索...">
                    <input type="submit" value="検索">
                </form>
-->
            </div>
            <button type="button" id="button" class="visible-xs"><i class="fa fa-bars"></i>メニュー</button>
        </header>
        <div class="nav_wrap">
            <div class="container">
<?php
    $args = array(
        'container' => 'nav',
        'container_class' => 'navbar navbar-default',
        'menu_class' => 'nav navbar-nav',
        );
    wp_nav_menu( $args );
?>
            </div>
        </div><!-- //.nav_wrap -->
        <div class="img_main">
            <div class="container">
                <!--
                <img src="<?php bloginfo( 'template_url' ); ?>/img/main.png" alt="" class="img-responsive">
                -->
                <div class="row">
                    <div class="col-sm-4">
                        <p class="p_first">毎月5000円お得!?</p>
                        <p class="p_second">　そう、格安SIMならね</p>
                    </div>
                    <div class="col-sm-8">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/main_3.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
<?php
if( function_exists( 'bcn_display' ) && !is_front_page() ){
?>
        <div class="container">
            <div class="breadcrumb">
                <?php bcn_display(); ?>
            </div>
        </div>
<?php
}
?>
