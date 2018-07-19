<?php
namespace Frameworks\Designer\Decorator;

class CD
{
    public $trackList;

    public function __construct()
    {
        $this->trackList = [];
    }

    public function addTrack($track)
    {
        $this->trackList[] = $track;
    }

    public function getTrackList()
    {
        $output = '';
        foreach ($this->trackList as $num => $track) {
            $output .= ($num + 1).") {$track}. ";
        }
        return $output;
    }
}