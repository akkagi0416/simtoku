<?php
function get_db( $id ){
    // 絶対パスで指定しないとダメ
    // $dbname = 'sqlite:' . get_bloginfo( 'template_url' ) . '/data/foo.db';
    $dbname = 'sqlite:' . '/var/www/foo/wp-content/themes/foo' . '/data/foo.db';

    $db = new PDO( $dbname );

    // id=$idのデータ取得&表示
    $stmt = $db->prepare( 'SELECT * FROM foo where id=?' );
    $stmt->bindValue( 1, $id, PDO::PARAM_INT );
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach( $results as $row ){
        echo '<p>' . $row['id'] . ':' . $row['name'] . '</p>';
    }
    $db = null;
}

function foo_func( $atts ){
    extract( shortcode_atts( array(
        'id' => 999,
        'name' => 'xxx'
    ), $atts ) );  
    get_db( $id );
}
add_shortcode( 'foo', 'foo_func' );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php the_title(); ?></title>
</head>
<body>
<?php
if( have_posts() ):
    while( have_posts() ) : the_post();
?>
    <?php the_content(); ?>
<?php
    endwhile;
endif;
?>
</body>
</html>
