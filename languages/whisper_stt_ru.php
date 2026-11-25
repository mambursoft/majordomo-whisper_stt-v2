<?php
$dictionary=array(
'WHISPER_STT_ENDPOINT'=>'Адрес API',
'WHISPER_STT_METHOD'=>'HTTP-метод',
'WHISPER_STT_TOKEN'=>'Токен доступа',
'WHISPER_STT_REGION'=>'Регион / маршрут',
'WHISPER_STT_TRACKING'=>'Номер отправления',
'WHISPER_STT_PAYLOAD'=>'Шаблон POST-запроса',
'WHISPER_STT_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'WHISPER_STT_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}