<?php get_header(); ?> 

<div class="container contents">
    <div class="row">
        <div class="col-sm-8 main">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
.simtoku_1 { width: 320px; height: 100px; }
@media(min-width: 768px){ .simtoku_1 { width: 728px; height: 90px; } }
</style>
<!-- simtoku_1 -->
<ins class="adsbygoogle simtoku_1"
     style="display:block"
     data-ad-client="ca-pub-6018661257488318"
     data-ad-slot="2542421381"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

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

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
.simtoku_2 { width: 320px; height: 100px; }
@media(min-width: 768px){ .simtoku_2 { width: 728px; height: 90px; } }
</style>
<!-- simtoku_2 -->
<ins class="adsbygoogle simtoku_2"
     style="display:block"
     data-ad-client="ca-pub-6018661257488318"
     data-ad-slot="8449354185"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

            <section class="relation">
                <h2>関連記事のご紹介</h2>
<?php
    // 関連記事を取得
    $categories = wp_get_post_categories( $post->ID, array( 'orderby' => 'rand' ) );
    if( $categories ){
        $args = array(
            'category__in' => array( $categories[0] ),
            'post__not_in' => array( $post->ID ),
            'showposts'    => 4,
            'caller_get_posts' => 1,
            'orderby'      => 'rand',
        );
        $my_query = new WP_Query( $args );
        if( $my_query->have_posts() ){
?>
            <div class="row">
<?php
            while( $my_query->have_posts() ) : $my_query->the_post();
?>
                <div class="col-sm-3 col-xs-6">
                    <a class="" href="<?php the_permalink(); ?>">
                        <div class="box_img">
<?php
                if( has_post_thumbnail() ) :
?>
                            <?php the_post_thumbnail( array( 200, 150 ), array( 'class' => 'img-responsive' ) ); ?>
<?php
                else :
?>
                            <img src="http://lorempixel.com/200/150/city" alt="<?php the_title(); ?> class="img-responsive">
<?php
                endif;
?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
<?php
            endwhile;
?>
            </div>
<?php
        }else{
?>
            <p>関連記事はありません</p>
<?php
        }
        wp_reset_query();
    }
?>
            </section>
        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->


<?php get_footer(); ?>
