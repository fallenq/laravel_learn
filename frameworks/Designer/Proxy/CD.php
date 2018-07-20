<?php
namespace Frameworks\Designer\Proxy;

class CD
{
    protected $_title = '';
    protected $_band = '';
    protected $_handle = null;

    public function __construct($title, $band)
    {
        $this->_title = $title;
        $this->_band = $band;
    }

    public function buy()
    {
        //
    }
}