<?php
/**
 * 装饰器模式
 * Date: 2018/7/18
 * Time: 15:06
 */
namespace Frameworks\Designer\Decorator;

class CDTrackListDecoratorCaps
{
    private $_cd;

    public function __construct(CD $cd)
    {
        $this->_cd = $cd;
    }

    public function makeCaps()
    {
        foreach ($this->_cd->trackList as & $track) {
            $track = strtoupper($track);
        }
    }
}