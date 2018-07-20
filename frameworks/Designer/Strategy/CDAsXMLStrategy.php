<?php
namespace Frameworks\Designer\Strategy;

class CDAsXMLStrategy
{
    public function get(CDusesStrategy $cd)
    {
        $doc = new \DOMDocument();
        $root = $doc->createElement('CD');
        $root = $doc->appendChild($root);
        $title = $doc->createElement('TITLE', $cd->title);
        $title = $root->appendChild($title);
        $band = $doc->createElement('BAND', $cd->band);
        $band = $root->appendChild($band);
        return $doc->saveXML();
    }
}