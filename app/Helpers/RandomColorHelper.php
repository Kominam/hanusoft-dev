<?php

namespace App\Helpers;

class RandomColorHelper
{
    public static function randomColor()
    {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
}
