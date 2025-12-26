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
}
