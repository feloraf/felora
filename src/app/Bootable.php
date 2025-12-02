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
            $rand = random_int(10, 100);
            $response->end(json_encode(['your_rand_item' => $rand]));
        });

        $http->start();
    }
}
