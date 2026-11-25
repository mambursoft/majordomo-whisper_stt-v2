<?php
$dictionary=array(
'WHISPER_STT_ENDPOINT'=>'Адреса API',
'WHISPER_STT_METHOD'=>'HTTP-метод',
'WHISPER_STT_TOKEN'=>'Токен доступу',
'WHISPER_STT_REGION'=>'Регіон / маршрут',
'WHISPER_STT_TRACKING'=>'Номер відправлення',
'WHISPER_STT_PAYLOAD'=>'Шаблон POST-запиту',
'WHISPER_STT_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'WHISPER_STT_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}