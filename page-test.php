<?php

require_once locate_template( 'lib/mvnodb.php' );


function test( $atts ){
    extract( shortcode_atts( array(
        'shortname' => 'ocn',
    ), $atts ) );  

    $aiu = new Mvno();
    $result = $aiu->getInfo( 'dmm' );
    print_r( $result );
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
