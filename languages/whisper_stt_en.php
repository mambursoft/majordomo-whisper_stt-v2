<?php
$dictionary=array(
'WHISPER_STT_ENDPOINT'=>'API endpoint',
'WHISPER_STT_METHOD'=>'HTTP method',
'WHISPER_STT_TOKEN'=>'Access token',
'WHISPER_STT_REGION'=>'Region / route',
'WHISPER_STT_TRACKING'=>'Tracking number',
'WHISPER_STT_PAYLOAD'=>'POST payload template',
'WHISPER_STT_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'WHISPER_STT_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}