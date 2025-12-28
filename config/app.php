<?php

return [
    /**
     * Application environment.
     * Options: 'local', 'production'.
     * Determines how the framework behaves (e.g., error reporting, logging).
     */
    'envriroment' => 'local',

    /**
     * The runtime class responsible for handling the application lifecycle.
     * For example, Swoole runtime for asynchronous, high-performance servers.
     */
    'runtime' => \Felora\Runtime\Swoole::class,

    /**
     * Configuration for microservice applications.
     */
    'apps' => [
        /**
         * The base path where all applications (microservices) are located.
         * The framework will automatically scan this directory for apps.
         */
        'paths' => __DIR__."/../apps/",

        /**
         * Optional manual paths for applications.
         * If you want to define apps explicitly instead of scanning the directory,
         * you can use this array to map app names to their paths.
         */
        // 'manual_paths' => [
        //     'http' => __DIR__."/apps/http/",
        //     'mqtt' => __DIR__."/apps/mqtt/",
        //     'socket' => __DIR__."/apps/socket/",
        // ],
    ],
];
