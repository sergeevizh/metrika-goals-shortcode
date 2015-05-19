<?php
/**
Plugin Name: Цели для Яндекс.Метрики
Plugin URI: https://github.com/systemo-biz/metrika-goals-shortcode
Description: Шорткод [metrika_goal id_counter="" jq_selector="" jq_event="" me_id=""], который создает событие на странице сайта и позволят настроить отслеживание целей. Требуется jQuery.
Author: Systemo
Version: 1.0
Author URI: http://systemo.biz
GitHub Plugin https://github.com/systemo-biz/metrika-goals-shortcode/
GitHub Branch: master
*/


function metrika_goal_callback($atts){
    extract( shortcode_atts( array(
        'id_counter' => '', //Берем из счетчика Яндекс Метрики
        'jq_selector' => 'form', //По умолчанию селектор Форм. Будет следить за формами.
        'jq_event' => 'submit',
        'me_id' => 'form_send',
	   ), $atts ) );
    ob_start();
    ?>
        <script type="text/javascript">
            (function ($) {
             $('<?php echo $jq_selector ?>').<?php echo $jq_event ?>(function(){
               yaCounter<?php echo $id_counter ?>.reachGoal('<?php echo $me_id ?>');
             });
            }(jQuery));
        </script>
    <?php
    $html = ob_get_contents();
    ob_get_clean();

 return $html;
}

add_shortcode('metrika_goal', 'metrika_goal_callback');
