# metrika-goals-shortcode
Настройка целея Яндекс.Метрики для WordPress через шорткод [metrika_goal id_counter="" jq_selector="" jq_event="" me_id=""]

# Описание
Позволяет сгенерировать jQuery код, для отслеживания целей Яндекс.Метрики. Например если нужно измерить конверсию посадочной страницы и количества отправленных заявок.

# Примеры

[metrika_goal id_counter="27903495" jq_selector=".form_wrapper_external_cp form" jq_event="submit" me_id="form_send_content"]

Сгенерирует код типа:

<script type="text/javascript">
  (function ($) {
   $('.form_wrapper_external_cp form').submit(function(){
     yaCounter27903495.reachGoal('form_send_content');
   });
  }(jQuery));
</script>
