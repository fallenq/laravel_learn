<?php
namespace Frameworks\Designer\Facade;

class CDUpperCase
{
    public static function makeString(CD $cd, $type)
    {
        $cd->$type = strtoupper($cd->$type);
    }

    public static function makeArray(CD $cd, $type)
    {
        $cd->$type = array_map('strtoupper', $cd->$type);
    }
}