<?php
namespace App;

class Bootable
{
    public function __construct()
    {
        $http = new \Swoole\Http\Server('0.0.0.0', 9501);
        $http->set(['hook_flags' => SWOOLE_HOOK_ALL]);

        $http->on('request', function ($request, $response) {
            $result = [];
            $response->end(json_encode([]));
        });

        $http->start();
    }
}
