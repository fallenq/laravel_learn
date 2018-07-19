<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/7/17
 * Time: 11:16
 */
namespace Frameworks\Designer\Adapter;

class LogToConsole
{
    private $_errorObject;

    public function __construct($errorObject)
    {
        $this->_errorObject = $errorObject;
    }

    public function write()
    {
        fwrite(STDERR, $this->_errorObject->getError());
    }
}