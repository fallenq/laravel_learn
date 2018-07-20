<?php
namespace Frameworks\Designer\Single;

class InventoryConnection
{
    protected static $_instance = null;

    protected $_handle = null;

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function __construct()
    {
        // Create handle and connection
    }

    public function updateQuantity($band, $title, $number)
    {
        // Check sql
    }
}