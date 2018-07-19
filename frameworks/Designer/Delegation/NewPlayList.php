<?php
namespace Frameworks\Designer\Delegation;

class NewPlayList
{
    private $_songs;
    private $_typeObject;

    public function __construct($objectClass)
    {
        $this->_songs = [];
        $this->_typeObject = new $objectClass;
    }

    public function addSong($location, $title)
    {
        $song = ['location'=>$location, 'title'=>$title];
        $this->_songs[] = $song;
    }

    public function getPlayList()
    {
        $playlist = $this->_typeObject->getPlayList($this->_songs);
        return $playlist;
    }
}