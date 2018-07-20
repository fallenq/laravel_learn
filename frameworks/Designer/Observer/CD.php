<?php
namespace Frameworks\Designer\Observer;

class CD
{
    public $title = '';
    public $band = '';
    protected $_observers = [];

    public function __construct($title, $band)
    {
        $this->title = $title;
        $this->band = $band;
    }

    public function attachObserver($type, $observer)
    {
        $this->_observers[$type][] = $observer;
    }

    public function notifyObserver($type)
    {
        if (isset($this->_observers[$type])) {
            foreach ($this->_observers[$type] as $observer) {
                $observer->update($this);
            }
        }
    }

    public function buy()
    {
        $this->notifyObserver('purchased');
    }

    protected function _connect()
    {

    }
}