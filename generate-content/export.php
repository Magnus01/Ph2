<?php


$result = json_encode($_POST);

$fp = fopen('export.json', 'w+');
fwrite($fp, $result);
fclose($fp);

$filename = json_decode($_POST['title']) . ".json";
$fp = fopen($filename, 'w+');
fwrite($fp, $result);
fclose($fp);