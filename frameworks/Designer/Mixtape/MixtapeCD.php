<?php
namespace Frameworks\Designer\Mixtape;

class MixtapeCD extends CD
{
    public function __clone()
    {
        $this->title = 'Mixtape';
    }
}