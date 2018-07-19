<?php
namespace Frameworks\Designer\Interpreter;

class UserCDInterpreter
{
    protected $_user = null;

    public function setUser($user)
    {
        $this->_user = $user;
    }

    public function getInterpreted()
    {
        $profile = $this->_user->getProfilePage();
        if (preg_match_all('/\{\{myCD\.(.*?)\}\}/', $profile, $triggers, PREG_SET_ORDER)) {
            $replacements = [];
            foreach ($triggers as $trigger) {
                $replacements[] = $trigger[1];
            }
            $replacements = array_unique($replacements);
            $myCD = new UserCD();
            $myCD->setUser($this->_user);
            foreach ($replacements as $replacement) {
                $profile = str_replace(
                    "{{myCD.{$replacement}}}",
                    call_user_func([$myCD, $replacement], $profile)
                );
            }
        }
        return $profile;
    }
}