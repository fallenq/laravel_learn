<?php
namespace Frameworks\Designer\Mediator;

class MusicContainerMediator
{
    protected $_containers = [];

    public function __construct()
    {
        $this->_containers[] = CD::class;
        $this->_containers[] = MP3Archive::class;
    }

    public function change($originalObject, $newValue)
    {
        $title = $originalObject->title;
        $band = $originalObject->band;

        foreach ($this->_containers as $container) {
            if (!($originalObject instanceof $container)) {
                $object = new $container;
                $object->title = $title;
                $object->band = $band;

                foreach ($newValue as $key => $val) {
                    $object->$key = $val;
                }

                $object->save();
            }
        }
    }
}