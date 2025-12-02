<?php

define('MQTT_AUTH_START', microtime(true));

require_once __DIR__."/../app/vendor/autoload.php";

return new App\Bootable();
