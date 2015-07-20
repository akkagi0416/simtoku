<?php

require_once locate_template( 'lib/mvnodb.php' );

function mvno_func( $atts ){
    extract( shortcode_atts( array(
        'shortname' => ocn,
    ), $atts ) );
    $m = new Mvno();
    $result = $m->getInfo( $shortname );

    $template_url = get_bloginfo( 'template_url' );
    $html = <<< EOM
    <section class="mvno_info">
        <h2>{$result['mvno']}の基本情報</h2>
        <div class="row">
            <div class="col-md-5">
                <img src="{$template_url}/img/{$result['shortname']}.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-7">
                <h3>基本情報</h3>
                <dl>
                    <dt>初期費用</dt><dd>{$result['initial']}</dd>
                    <dt>最大速度</dt><dd>{$result['speed']}</dd>
                    <dt>SIMサイズ</dt><dd>{$result['size']}</dd>
                    <dt>SMS付</dt><dd>{$result['sms']}</dd>
                    <dt>音声通話付</dt><dd>{$result['voice']}</dd>
                    <dt>通話料</dt><dd>{$result['voice_cost']}</dd>
                    <dt>回線</dt><dd>{$result['line']}</dd>
                    <dt>購入窓口</dt><dd>{$result['buy']}</dd>
                </dl>
            </div>
        </div>
        <h3>{$result['mvno']}の3つのおすすめポイント</h3>
        <ul>
            <li><i class="fa fa-star"></i>{$result['feature1']}</li>
            <li><i class="fa fa-star"></i>{$result['feature2']}</li>
            <li><i class="fa fa-star"></i>{$result['feature3']}</li>
        </ul>
        <p>{$result['comment1']}</p>
        %TABLE%
    </section>
EOM;

    $results = $m->getPlan( $shortname );

    $table = <<< EOM2
        <h3>{$result['mvno']}の基本プラン(一部)</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                <tr class="active">
                    <th>プラン名</th>
                    <th>音声通話</th>
                    <th>月額料金(円)</th>
                    <th>最大速度</th>
                    <th>データ量</th>
                </tr>
EOM2;

    foreach( $results as $row ){
        // 基本プランのみ表示
        if( $row['plan_basic'] == 1 ){
            // データSIM or 音声通話付SIM表示 (SMS付SIMなし)
            if( $row['sim_data'] == 1 || $row['sim_voice'] == 1 ){
                $table .= '<tr>';
                $table .= '<td>' . $row['plan_name'] . '</td>';
                if( $row['sim_voice'] == 1 ){
                    $table .= '<td>〇</td>';
                } else {
                    $table .= '<td>&nbsp</td>';
                }
                $table .= '<td>' . $row['cost']      . '</td>';
                $table .= '<td>' . $row['speed']     . '</td>';
                $table .= '<td>' . $row['data']      . '</td>';
                $table .= '</tr>';
            }
        }
    }
    // $flg_data = 0;
    // $flg_voice = 0;
    // for( $i = 0; $i < count( $results ); $i++ ){
    //     if( $results[$i]['plan_basic'] == 1 ){
    //         $flg_data  += $results[$i]['sim_data'];
    //         $flg_voice += $results[$i]['sim_voice'];
    //     }
    // }
    // // データSIM
    // if( $flg_data != 0 ){
    //     $table .= '<tr><td colspan="4" class="active">データSIM</td></tr>';
    //     foreach( $results as $row ){
    //         if( $row['sim_data'] == 1 && $row['plan_basic'] == 1 ){
    //             $table .= '<tr>';
    //             $table .= '<td>' . $row['plan_name'] . '</td>';
    //             $table .= '<td>' . $row['cost']      . '</td>';
    //             $table .= '<td>' . $row['speed']     . '</td>';
    //             $table .= '<td>' . $row['data']      . '</td>';
    //             $table .= '</tr>';
    //         }
    //     }
    // }
    // // 音声通話付SIM
    // if( $flg_voice != 0 ){
    //     $table .= '<tr><td colspan="4" class="active">音声通話付SIM</td></tr>';
    //     foreach( $results as $row ){
    //         if( $row['sim_voice'] == 1 && $row['plan_basic'] == 1 ){
    //             $table .= '<tr>';
    //             $table .= '<td>' . $row['plan_name'] . '</td>';
    //             $table .= '<td>' . $row['cost']      . '</td>';
    //             $table .= '<td>' . $row['speed']     . '</td>';
    //             $table .= '<td>' . $row['data']      . '</td>';
    //             $table .= '</tr>';
    //         }
    //     }
    // }
    $table .= '</table></div>';
    $ret = str_replace( '%TABLE%', $table, $html );
    return $ret;
}
add_shortcode( 'mvno', 'mvno_func' );

