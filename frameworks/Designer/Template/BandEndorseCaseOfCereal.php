<?php
namespace Frameworks\Designer\Template;

class BandEndorseCaseOfCereal extends SaleItemTemplate
{
    public $band;

    public function __construct($band, $price)
    {
        $this->band = $band;
        $this->price = $price;
    }

    protected function taxAddition()
    {
        return 0;
    }

    protected function oversizeAddition()
    {
        return round($this->price * .20, 2);
    }
}