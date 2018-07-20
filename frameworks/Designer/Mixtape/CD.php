<?php
namespace Frameworks\Designer\Mixtape;

class CD
{
    public $title = '';
    public $band = '';
    public $trackList = [];

    public function __construct($id)
    {
        $this->title = 'title1';
        $this->band = 'band1';
    }

    public function buy()
    {
        var_dump($this);
    }
}