<?php

namespace App\Constracts;

interface AesInterface
{
    public static function encode($data);
    public static function decode($data);
}
