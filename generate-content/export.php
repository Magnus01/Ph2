<?php
/**
 * Created by PhpStorm.
 * User: y50-70
 * Date: 10/16/2016
 * Time: 4:22 PM
 */

$result = json_encode($_POST);

$fp = fopen('export.json', 'w+');
fwrite($fp, $result);
fclose($fp);