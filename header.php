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
    <body>
        <header>
            <div class="container">
                <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
<!--
                <p class="search"><i class="fa fa-search"></i></p>
                <form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" value name="s" placeholder="検索...">
                    <input type="submit" value="検索">
                </form>
-->
<?php
    $args = array(
        'container' => 'nav',
        'container_class' => 'navbar navbar-default',
        'menu_class' => 'nav navbar-nav',
        );
    wp_nav_menu( $args );
?>
            </div>
        </header>
        <div class="img_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>格安SIMで毎月5,000円のお得なスマホ生活</h2>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <img src="http://lorempixel.com/600/200/technics/" alt="" class="img-responsive">
                    </div>
                </div>
                <!--
                <img src="<?php bloginfo( 'template_url' ); ?>/img/main.jpg" alt="" class="img-responsive">
                -->
            </div>
        </div>
        <div class="container">
            <div class="breadcrumb">
<?php
if( function_exists( 'bcn_display' ) ){
    bcn_display();
}
?>
            </div>
        </div>
