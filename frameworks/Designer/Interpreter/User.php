<?php
namespace Frameworks\Designer\Interpreter;

class User
{
    protected $_username = '';

    public function __construct($username)
    {
        $this->_username = $username;
    }

    public function getProfilePage()
    {
        $profile = " <h2>I like never again!</h2> ";
        $profile .= "I love all of their songs. My favorite CD: <br/>";
        $profile .= "{{myCD.getTitle}}!!";
        return $profile;
    }
}