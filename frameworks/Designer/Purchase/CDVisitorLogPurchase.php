<?php
namespace Frameworks\Designer\Purchase;

class CDVisitorLogPurchase
{
    public function visitCD($cd)
    {
        $logline = "{$cd->title} by {$cd->band} was purchased for {$cd->price}";
        $logline .= "at". date('Y-m-d'. "\n");

        file_put_contents('/logs/purchases.log', $logline, FILE_APPEND);
    }
}