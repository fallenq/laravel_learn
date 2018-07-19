<?php
namespace Frameworks\Designer\Factory;

class CDFactory
{
    public static function create($className)
    {
        return new $className;
    }
}