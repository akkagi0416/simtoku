<?php

register_nav_menus( array( 'nav' => 'ナビゲーション' ) );

require_once locate_template( 'lib/mvnodb.php' );       // mvno関連のデータベース操作
require_once locate_template( 'lib/shortcode.php' );    // shortcode集

register_sidebar( array(
    'name' => 'sidebar1',
    'id' => 'sidebar1'
) );

add_theme_support( 'post-thumbnails' );

// remove_filter( 'the_excerpt', 'wpautop' );  // 前後<p>タグを防止
