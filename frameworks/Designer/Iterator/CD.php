<?php
namespace Frameworks\Designer\Iterator;

class CD
{
    public $band = '';
    public $title = '';
    public $trackList = [];

    public function __construct($band, $title)
    {
        $this->band = $band;
        $this->title = $title;
    }

    public function addTrack($track)
    {
        $this->trackList[] = $track;
    }
}