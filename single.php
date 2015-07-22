<?php get_header(); ?> 
<div class="container contents">
    <div class="row">
        <div class="col-sm-8 main">
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post()
?>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>">投稿日 : <?php the_time( 'Y-m-d' ); ?></time>
            <?php the_content(); ?>
<?php
        endwhile;
    endif;
?>
            <ul class="pager">
                <li class="previous"><?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> 前の記事', TRUE ); ?></li>
                <li class="next"    ><?php next_post_link( '%link', '次の記事 <i class="fa fa-arrow-right"></i>', TRUE ); ?></li>
            </ul>
        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
