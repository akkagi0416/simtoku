<?php get_header(); ?> 
<div class="container contents">
    <div class="row">
        <div class="col-md-8 main">
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
        $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        $posts = get_posts( $args );
    // var_dump( $posts );
        foreach( $posts as $p ){
            echo '<h2>' . $p->post_title . '</h2>';
            echo '<ul>';
            $args = array(
                'title_li' => '',
                'child_of' => $p->ID,
                'sort_column' => 'menu_order',
                'sort_order'  => 'asc',
                'depth' => 1,
            );
            wp_list_pages( $args );
            echo '</ul>';
        }
        wp_reset_postdata();
    }
?>

        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
