<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/7/17
 * Time: 11:14
 */
namespace Frameworks\Designer\Adapter;

class ErrorObject
{
    private $_error;

    public function __construct($error)
    {
        $this->_error = $error;
    }

    public function getError()
    {
        return $this->_error;
    }
}