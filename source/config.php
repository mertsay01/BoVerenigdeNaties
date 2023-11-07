<?php
$envSettings = [];
if (file_exists(dirname(__FILE__).'/.env')) {
    $envSettings = parse_ini_file(dirname(__FILE__).'/.env');
}

define("HOST", $envSettings["HOST"]);
define("USER", $envSettings["USER"]);
define("PASSWORD", $envSettings["PASSWORD"]);
define("NAME", $envSettings["NAME"]);