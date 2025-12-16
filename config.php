<?php

return [
    'runtime' => \Felora\Runtime\Swoole::class,
    'apps' => [
        'paths' => __DIR__."/apps/",

        /**
        'manual_paths' => [
           'http' => __DIR__."/apps/http/",
           'mqtt' => __DIR__."/apps/mqtt/",
           'socket' => __DIR__."/apps/socket/",
        ],
         */
    ],
];