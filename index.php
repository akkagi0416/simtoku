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
        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
