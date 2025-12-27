<?php

$http = new Swoole\Http\Server('0.0.0.0', 9501);
$http->set(['hook_flags' => SWOOLE_HOOK_ALL]);

$http->on('request', function ($request, $response) {
    $response->header('Content-Type', 'text/html; charset=utf-8');
    $response->end();
});

$http->start();
