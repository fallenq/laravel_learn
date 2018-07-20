<?php
namespace Frameworks\Designer\Observer;

class ActivityStream
{
    public static function addNewItem($item)
    {
        print $item;
    }
}