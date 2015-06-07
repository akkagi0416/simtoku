<?php get_header(); ?> 
<div class="container">
    <div class="row">
        <div class="col-md-9 main">
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post()
?>
            <?php the_content(); ?>
<?php
        endwhile;
    endif;
?>
<!--
            <section>
                <h2>格安SIMのここがすごい</h2>
                <ul>
                    <li>スマホ代が毎月5,000円もお得</li>
                    <li>最新スマホでも使える</li>
                    <li>音声付SIMならMNPもできる</li>
                </ul>
                <img src="http://placehold.jp/600x200.png" alt="" class="img-responsive">
                <p>MVNO各社からさまざまな格安なSIMプランが提案されています。自分の生活スタイルに合わせたSIMプランを選んで、月々のスマホ料金を格安に押さえましょう。</p>
            </section>

            <section>
                <h2>自分に合った格安SIMを探しましょう</h2>
                <p>Sit corporis rem nulla elit illum. Nemo elit voluptatibus ipsam.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.jp/200x200.png" alt="" class="img-responsive">
                            <div class="caption">
                                <h3>SIMのイロハ</h3>
                                <p>格安SIMについて説明しています。「SIMとは?」「なぜお得なの?」そんな疑問にお答えします。これから格安SIMを始めてみたい人、スマホ料金を見直してみたい人、そんな人はまずこちらからどうぞ。</p>
                                <p><a href="#" class="btn btn-primary">こちらへ&raquo;</a></p>
                            </div>
                        </div><!-- //.thumbnail -->
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.jp/200x200.png" alt="" class="img-responsive">
                            <div class="caption">
                                <h3><i class="fa fa-folder-open-o"></i>プラン選び</h3>
                                <p>格安SIMを使うにあたってMVNO各社からいろんなプランが提案されています。こちらのページでは、各社のプラン比較や紹介をしています。こちらから自分に最適な格安SIMプランを見つけてみましょう。</p>
                                <p><a href="#" class="btn btn-primary">こちらへ&raquo;</a></p>
                            </div>
                        </div><!-- //.thumbnail -->
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.jp/200x200.png" alt="" class="img-responsive">
                            <div class="caption">
                                <h3>スマホ選び</h3>
                                <p>格安SIMが使えるスマホをご紹介。格安スマホやコスパ重視、さらにはiPhoneまでいろんなSIMフリーのスマホを紹介しています。新しいスマホが欲しくなったらまずはこちらをチェック。</p>
                                <p><a href="#" class="btn btn-primary">こちらへ&raquo;</a></p>
                            </div>
                        </div><!-- //.thumbnail -->
                    </div>
                </div>
            </section>
            <section>
                <h2>SIMが見つかったら始めてみましょう</h2>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a>
                    </div>
                    <div class="media-body">
                        <h4>スタートガイド</h4>
                        <p>Sit corporis laudantium quaerat et reprehenderit debitis quibusdam ea tempore sapiente vel. Soluta exercitationem quasi veniam eum veritatis non iure.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a>
                    </div>
                    <div class="media-body">
                        <h4>よくわる質問</h4>
                        <p>Sit corporis laudantium quaerat et reprehenderit debitis quibusdam ea tempore sapiente vel. Soluta exercitationem quasi veniam eum veritatis non iure.</p>
                    </div>
                </div>
            </section>
-->
        </div><!-- //.main -->
        <?php get_sidebar(); ?>
    </div><!-- //.row -->
</div><!-- //.container main + sidebar -->
<?php get_footer(); ?>
