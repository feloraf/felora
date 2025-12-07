<?php

define('FELORAPHP_START', microtime(true));

require_once __DIR__."/../vendor/autoload.php";
require_once (__DIR__."/../bootloader.php");

return new Bootloader();
