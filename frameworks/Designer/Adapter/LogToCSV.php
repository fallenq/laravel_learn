<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/7/17
 * Time: 11:22
 */
namespace Frameworks\Designer\Adapter;

class LogToCSV
{
    const CSV_LOCATION = 'log.csv';

    private $_errorObject;

    public function __construct($errorObject)
    {
        $this->_errorObject = $errorObject;
    }

    public function write()
    {
        $line = $this->_errorObject->getErrorNumber();
        $line .= ',';
        $line .= $this->_errorObject->getErrorText();
        $line .= "\n";
        file_put_contents(self::CSV_LOCATION, $line, FILE_APPEND);
    }
}