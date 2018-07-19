<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/7/17
 * Time: 11:27
 */
namespace Frameworks\Designer\Adapter;

class LogToCSVAdapter extends ErrorObject
{
    private $_errorNumber, $_errorText;

    public function __construct($error)
    {
        parent::__construct($error);
        $parts = explode(':', $this->getError());
        $this->_errorNumber = $parts[0];
        $this->_errorText = $parts[1];
    }

    public function getErrorNumber()
    {
        return $this->_errorNumber;
    }

    public function getErrorText()
    {
        return $this->_errorText;
    }
}