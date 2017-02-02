<?php


$result = json_encode($_POST);
$result = json_decode(json_encode($result), true);
$fp = fopen('export.json', 'w+');
fwrite($fp, $result);
fclose($fp);

