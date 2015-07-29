<?php get_header(); ?> 
<div class="container contents">
    <div class="row">
        <div class="col-sm-8 main">
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post()
?>
<?php
    if( !is_front_page() ) :
?>
            <h1><?php the_title(); ?></h1>
<?php
    endif;
?>
            <?php the_content(); ?>
<?php
        endwhile;
    endif;
?>
<?php
    global $post;
    if( $post->post_parent ){
        // not 親
    }else{
        // 親
        // タイトル一覧を自動表示
        $args = array(
            'posts_per_page' => -1,
            'post_parent' => $post->ID,
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        $posts = get_posts( $args );

        $custum_field = 'index_group';
        $index_list = array(
            'info' => array(
                '目次',
            ),
            'plan' => array(
                'おすすめプラン',
                '格安SIMのプラン選びABC',
                'MVNO紹介',
            ),
            'mobile' => array(
            ),
            'guide' => array(
                '格安SIMを使いはじめるまでの流れ',
            ),
        );
        // title, url, custum_field値を取得して配列にリストアップ
        $title_lists = array();
        foreach( $posts as $p ){
            $title              = $p->post_title;
            $url                = get_permalink( $p->ID );
            $index_group_number = get_post_meta( $p->ID, $custum_field, true );
            if( $index_group_number == '' ){ $index_group_number = '0'; }  // custum_field記入忘れ対応
            array_push( $title_lists, array( $title, $url, $index_group_number ) );
        }
        // custum_field値ごとに該当のタイトルを出力
        $this_page = $index_list[ $post->post_name ];
        for( $i = 0; $i < count( $this_page ); $i++ ){
            echo '<h2>' . $this_page[ $i ] . '</h2>';
            echo '<ul>';
            foreach( $title_lists as $title ){
                if( $title[2] == $i ){
                    echo '<li><a href="' . $title[1] . '">' . $title[0] . '</a></li>';
                }
            }
            echo '</ul>';
        }
// var_dump( $title_lists );
// var_dump( $posts );
        wp_reset_postdata();
    }
?>

        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
