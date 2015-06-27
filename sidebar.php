<div class="col-md-4">
    <aside>
        <div class="side_ranking">
            <h3>格安SIM 格安ランキング</h3>
            <ul>
                <li><a href="#"><i class="fa fa-trophy fa-fw fa-2x"></i> 1位 660円 DMM mobile</a></li>
                <li><a href="#"><i class="fa fa-circle-o fa-fw fa-2x"></i> 2位 900円 IIJmio</a></li>
                <li><a href="#"><i class="fa fa-circle-o fa-fw fa-2x"></i> 2位 900円 BIGLOBE LTE・3G</a></li>
                <li><a href="#"><i class="fa fa-circle-o fa-fw fa-2x"></i> 2位 900円 楽天モバイル</a></li>
                <li><a href="#"><i class="fa fa-circle-o fa-fw fa-2x"></i> 2位 900円 b-mobile</a></li>
            </ul>
            <p>
                <a href="http://h.accesstrade.net/sp/cc?rk=0100htrs00dtg9" rel="nofollow" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100htrs00dtg9" alt="" border="0" class="img-responsive" style="margin: 0 auto;"></a>
            </p>
        </div><!-- //.side_ranking -->

        <div class="side_news">
            <h3>格安SIMニュース</h3>
<?php
    $args = array( 
        'category_name' => 'news',
        'posts_per_page' => 5,
    );
    $my_query = new WP_Query( $args );

    if( $my_query->have_posts() ) :
?>
            <ul>
<?php
        while( $my_query->have_posts() ) :$my_query->the_post();
?>
                <li>
                    <div class="news_img">
                        <a href="<?php the_permalink(); ?>">
<?php
if( has_post_thumbnail() ) :
?>
                            <?php the_post_thumbnail( array( 200, 150 ), array( 'class' => 'img-responsive' ) ); ?>
<?php
else :
?>
                            <img src="http://lorempixel.com/200/150/city" alt="<?php the_title(); ?>" class="img-responsive">
<?php
endif;
?>
                        </a>
                    </div>
                    <div class="news_content">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
                    </div>
                </li>
<?php
        endwhile;
?>
            </ul>
<?php
    endif;
    wp_reset_postdata();
?>
        </div><!-- //.side_news -->
    </aside>
</div>
