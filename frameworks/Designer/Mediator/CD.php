<?php
namespace Frameworks\Designer\Mediator;

class CD
{
    public $band = '';
    public $title = '';
    public $_mediator;

    public function __construct($mediator = null)
    {
        $this->_mediator = $mediator;
    }

    public function save()
    {
        var_dump($this);
    }

    public function changeBandName($newName)
    {
        if (!is_null($this->_mediator)) {
            $this->_mediator->change($this, ['band'=>$newName]);
        }
        $this->band = $newName;
        $this->save();
    }
}