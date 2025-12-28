<?php

use Felora\Bootloader\Bootloader as FeloraBootloader;

class Bootloader extends FeloraBootloader
{
    public function setUp(): void
    {
        //
    }

    public function setDown(): void
    {
        //
    }

    protected function base(): string
    {
        return __DIR__;
    }
}
