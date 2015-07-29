<div class="col-sm-4">
    <aside>
        <br>
        <p style="text-align:center;">
            <a href="http://h.accesstrade.net/sp/cc?rk=0100hxtf00ekjc" rel="nofollow" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100hxtf00ekjc" alt="" border="0" /></a>
        </p>
        <div class="side_ranking">
            <h3>格安SIM 価格ランキング<span style="font-weight: normal; font-size:12px;">(3GBプラン)</span></h3>
            <ul>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 1位 850円 <a href="http://h.accesstrade.net/sp/cc?rk=0100hsya00ekjc" rel="nofollow" target="_blank">DMM mobile<img src="http://h.accesstrade.net/sp/rr?rk=0100hsya00ekjc" width="1" height="1" border="0" alt="" /></a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 2位 900円 <a href="https://www.freetel.jp/">FREETEL</a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 3位 900円 <a href="http://h.accesstrade.net/sp/cc?rk=0100hxty00ekjc" rel="nofollow" target="_blank">U-mobile<img src="http://h.accesstrade.net/sp/rr?rk=0100hxty00ekjc" width="1" height="1" border="0" alt="" /></a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 4位 900円 <a href="http://px.a8.net/svt/ejp?a8mat=2HMAT4+2DRYY+2IZU+ZWFS2" target="_blank">OCN モバイル ONE</a><img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2HMAT4+2DRYY+2IZU+ZWFS2" alt=""></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 5位 900円 <a href="http://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3228168&pid=883619504" target="_blank" ><img src="http://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3228168&pid=883619504" height="1" width="1" border="0">IIJmio</a></li>
            </ul>
        </div><!-- //.side_ranking -->

        <div class="side_news">
            <h3>格安SIMニュース</h3>
<?php
    $args = array( 
        'category_name' => 'news',
        'posts_per_page' => 8,
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
