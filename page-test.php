<?php
function mvno( $shortname ){
    try{
        // $db = new PDO( 'mvno.db' );
        $db = new PDO( 'sqlite:/var/www/sim/wp-content/themes/sim/data/mvno.db' );
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }catch( PDOException $e ){
        print 'DB接続エラー<br>';
        print $e->getMessage();
        die();
    }

    echo $shortname . '<br><br>';
    // $stmt = $db->query( 'SELECT * FROM mvno_list' );
    $stmt = $db->prepare( 'SELECT * FROM mvno_list where shortname=?' );
    $stmt->bindValue( 1, $shortname, PDO::PARAM_STR );
    $stmt->execute();
    $results = $stmt->fetchAll( PDO::FETCH_ASSOC );
    foreach( $results as $row ){
        echo $row['shortname'];
        echo '<br>';
    }
    $db = null;

}

function test( $atts ){
    extract( shortcode_atts( array(
        'shortname' => 'ocn',
        'mvno' => 'OCN モバイル ONE'
    ), $atts ) );  

    mvno( $shortname );
}

add_shortcode( 'tt', 'test' );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
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
