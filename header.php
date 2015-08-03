<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>
<?php
    $body_class = '';
    if( is_page() ){
        $page = get_page( get_the_ID() );
        $body_class = $page->post_name;
    } elseif( is_category ){ 
        $cat = get_the_category();
        $body_class = $cat[0]->category_nicename;
    }
    if( is_single() ){
        $body_class .= ' single';
    }
?>
    <body class="<?php echo $body_class; ?>">
        <header>
            <div class="container">
<?php
    if( is_front_page() ) :
?>
                <h1 class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
<?php
    else :
?>
                <h2 class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h2>
<?php
    endif;
?>
                <form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" value name="s" placeholder="検索...">
                    <input type="submit" value="検索">
                </form>
                <button type="button" id="search" class="visible-xs"><i class="fa fa-search"></i>検索</button>
                <button type="button" id="button" class="visible-xs"><i class="fa fa-bars"></i>メニュー</button>
            </div><!-- //.container -->
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
                        <!-- <p>えっ私のスマホ代高すぎ!</p> -->
                        <!-- <p>Yes we can </p> -->
                        <!-- <p>今でしょ</p> -->
                        <!-- <p>倍返しだ</p> -->
                        <!-- <p>セコムしてます</p> -->
                        <!-- <p>格安王におれはなる</p> -->
                        <!-- <p>人生は掛け算だ。いくらチャンスがあっても君が0なら意味がない</p> -->
                        <!-- <p>恋愛レボリューション21</p> -->
                        <!-- <p>24時間働けますか</p> -->
                        <!-- <p>2位じゃダメなんですか</p> -->
                        <!-- <p>AKB ヘビーローテーション</p> -->
                        <!-- <p>だめーだめだめ</p> -->
                        <!-- <p>SIMという字はSとMがI(愛)し合う</p> -->
                        <!-- <p>「この味がいいね」と言ったから7月6日はサラダ記念日</p> -->
                        <!-- <p>トンネルを抜けるとそこは雪国だった</p> -->
                        <!-- <p>おおロミオどうしてあなたはロミオなの</p> -->
                    </div>
                    <div class="col-sm-8">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/main.png" alt="" class="img-responsive">
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
