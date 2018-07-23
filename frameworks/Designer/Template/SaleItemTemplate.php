<?php
namespace Frameworks\Designer\Template;

abstract class SaleItemTemplate
{
    public $price = 0;

    public final function setPriceAdjustments()
    {
        $this->price += $this->taxAddition();
        $this->price += $this->oversizeAddition();
    }

    protected function oversizeAddition()
    {
        return 0;
    }

    abstract protected function taxAddition();
}