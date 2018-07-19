<?php
namespace Frameworks\Designer\Delegation;

class M3uPlayListDelegation implements PlayListNozzle
{
    public function getPlayList($songs)
    {
        $m3u = "#EXTM3U\n\n";

        foreach ($songs as $song) {
            $m3u .= "#EXTINF:-1,{$song['title']}\n";
            $m3u .= "{$song['location']}\n";
        }
        return $m3u;
    }
}