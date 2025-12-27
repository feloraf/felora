<?php

use Felora\Bootloader\Bootloader as FeloraBootloader;

class Bootloader extends FeloraBootloader
{
    public static function setUp(): void
    {
        static::setUp();
    }

    protected function base(): string
    {
        return __DIR__;
    }
}
