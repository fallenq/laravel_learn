<?php
namespace Frameworks\Designer\Factory;

class CD
{
    public $title = '';
    public $band = '';
    public $tracks = [];

    public function __construct()
    {}

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setBand($band)
    {
        $this->band = $band;
    }

    public function addTrack($track)
    {
        $this->tracks[] = $track;
    }
}