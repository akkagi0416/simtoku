<?php

register_nav_menus( array( 'nav' => 'ナビゲーション' ) );

require_once locate_template( 'lib/mvnodb.php' );   // mvno関連のデータベース操作
