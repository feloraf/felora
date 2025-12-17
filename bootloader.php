<?php

use Felora\Bootloader\Bootloader as FeloraBootloader;

class Bootloader extends FeloraBootloader
{
    public static function setUp(): void
    {
        static::setUp();
    }

    protected function setConfig(): string
    {
        return __DIR__.'/config.php';
    }

    public function server(): void
    {
        $http = new Swoole\Http\Server('0.0.0.0', 9501);
        $http->set(['hook_flags' => SWOOLE_HOOK_ALL]);

        $http->on('request', function ($request, $response) {
            usleep(20000);
            $response->header('Content-Type', 'application/json');
            $response->end(json_encode(['rand' => rand(1, 100)]));
        });

        $http->start();
    }
}
