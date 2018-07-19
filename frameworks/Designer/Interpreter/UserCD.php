<?php
namespace Frameworks\Designer\Interpreter;

class UserCD
{
    protected $_user = null;

    public function setUser($user)
    {
        $this->_user = $user;
    }

    public function getTitle()
    {
        $title = 'Waste of a Rib';
        return $title;
    }
}