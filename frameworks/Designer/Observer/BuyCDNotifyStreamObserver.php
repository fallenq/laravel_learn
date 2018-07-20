<?php
namespace Frameworks\Designer\Observer;

class BuyCDNotifyStreamObserver
{
    public function update(CD $cd)
    {
        $activity = "The CD named {$cd->title} by ";
        $activity .= "{$cd->band} was just purchased. ";
        ActivityStream::addNewItem($activity);
    }
}