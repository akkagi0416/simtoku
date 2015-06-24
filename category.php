<?php get_header(); ?> 
<div class="container contents">
    <div class="row">
        <div class="col-md-8 main">
            <section>
            <h2><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h2>
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post()
?>
                <div class="row mobile-box">
                    <div class="col-sm-4 img-box">
<?php
            if( has_post_thumbnail() ) :
?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 200, 150 ), array( 'class' => 'img-responsive' ) ); ?></a>
<?php
            else :
?>
                        <a href="<?php the_permalink(); ?>"><img src="http://lorempixel.com/200/150/city" alt="<?php the_title(); ?>" class="img-responsive"></a>
<?php
            endif;
?>
                    </div>
                    <div class="col-sm-8">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary pull-right">続きを読む <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
<?php
        endwhile;
    endif;
?>
<?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    $page_format = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => true,
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
        'type' => 'array',
    ) );
    // make bootstrap pagination format
    if( is_array( $page_format ) ){
        $paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        echo '<div><ul class="pagination">';
        foreach( $page_format as $page ){
            $str = str_replace( 'current', 'active', $page );
            if( strstr( $page, 'current' ) ){
                echo "<li class='active'>$page</li>";
            }else{
                echo "<li>$page</li>";
            }
        }
        echo '</ul></div>';
    }
    wp_reset_query();
?>
            </section>
        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
