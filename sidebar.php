<div class="col-sm-4">
    <aside>
        <br>
        <div class="side_admin">
            <h2>キャンペーン中のおすすめ格安SIM</h2>
            <p class="adminbar"><a href="<?php echo get_site_url(); ?>/20150908_news/">記事:BIGLOBE LTE・3G 10,000円キャッシュバック</a></p>
            <p style="text-align:center;">
<!-- <a href="http://h.accesstrade.net/sp/cc?rk=0100hxtf00ekjc" rel="nofollow" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100hxtf00ekjc" alt="" border="0" /></a> -->
                <a href="http://h.accesstrade.net/sp/cc?rk=0100im0x00ekjc" rel="nofollow" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100im0x00ekjc" alt="" border="0" /></a>
            </p>
        </div><!-- //.side_admin -->
        <div class="side_ranking">
            <h2>格安SIM 価格ランキング<span style="font-weight: normal; font-size:12px;">(3GBプラン)</span></h2>
            <ul>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 1位 850円 <a href="http://h.accesstrade.net/sp/cc?rk=0100hsya00ekjc" rel="nofollow" target="_blank">DMM mobile<img src="http://h.accesstrade.net/sp/rr?rk=0100hsya00ekjc" width="1" height="1" border="0" alt="" /></a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 2位 900円 <a href="https://www.freetel.jp/">FREETEL</a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 3位 900円 <a href="http://h.accesstrade.net/sp/cc?rk=0100hxty00ekjc" rel="nofollow" target="_blank">U-mobile<img src="http://h.accesstrade.net/sp/rr?rk=0100hxty00ekjc" width="1" height="1" border="0" alt="" /></a></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 4位 900円 <a href="http://px.a8.net/svt/ejp?a8mat=2HMAT4+2DRYY+2IZU+ZWFS2" target="_blank">OCN モバイル ONE</a><img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2HMAT4+2DRYY+2IZU+ZWFS2" alt=""></li>
                <li><i class="fa fa-trophy fa-fw fa-2x"></i> 5位 900円 <a href="http://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3228168&pid=883619504" target="_blank" ><img src="http://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3228168&pid=883619504" height="1" width="1" border="0">IIJmio</a></li>
            </ul>
        </div><!-- //.side_ranking -->

        <div class="side_news">
            <h2><a href="<?php echo home_url( '/category/news' ); ?>">格安SIMニュース</a></h2>
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
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
            <p style="text-align: right;"><a href="<?php echo get_site_url();?>/category/news/"><i class="fa fa-arrow-right"></i> 他のニュース一覧</a></p>
        </div><!-- //.side_news -->
        <div class="side_mvno">
            <h2><a href="<?php echo home_url( '/plan/' ); ?>">MVNOの格安SIM一覧</a></h2>
<?php
    $page = get_page_by_path( 'plan' ); // planページのID取得のため
    $args = array( 
        // 'pagename' => 'plan',
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_parent' => $page->ID,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    $custum_field = 'index_group';
    $index_mvno   = 2;      // 'mvno'のindex_groupのカスタムフィールド値

    $my_query = new WP_Query( $args );

    if( $my_query->have_posts() ) :
?>
            <ul>
<?php
        while( $my_query->have_posts() ) :$my_query->the_post();
            if( get_post_meta( get_the_ID(), $custum_field, true ) == $index_mvno ){
?>
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-mobile fa-fw fa-2x"></i><?php the_title(); ?></a></li>
<?php
            }
        endwhile;
?>
            </ul>
<?php
    endif;
    wp_reset_postdata();
?>
        </div><!-- //.side_mvno -->

        <div class="side_blog">
            <h2><a href="<?php echo home_url( '/category/blog' ); ?>">管理人のひとり言</a></h2>
<?php
    $args = array( 
        'category_name' => 'blog',
        'posts_per_page' => 3,
    );
    $my_query = new WP_Query( $args );

    if( $my_query->have_posts() ) :
?>
            <ul>
<?php
        while( $my_query->have_posts() ) :$my_query->the_post();
?>
                <li>
                    <div class="blog_img">
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
                    <div class="blog_content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
            <p style="text-align: right;"><a href="<?php echo get_site_url();?>/category/blog/"><i class="fa fa-arrow-right"></i> 他のひとり言一覧</a></p>
        </div><!-- //.side_blog -->

        <div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
.simtoku_3 { width: 336px; height: 280px; }
@media(min-width: 768px){ .simtoku_3 { width: 336px; height: 280px; } }
</style>
<!-- simtoku_3 -->
<ins class="adsbygoogle simtoku_3"
     style="display:block"
     data-ad-client="ca-pub-6018661257488318"
     data-ad-slot="3321150582"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>

    </aside>
</div>
