<?php
namespace Frameworks\Designer\Purchase;

class CDVisitorPopulateDiscountList
{
    public function visitCD($cd)
    {
        if ($cd->price < 10) {
            $this->_populateDiscountList($cd);
        }
    }

    protected function _populateDiscountList($cd)
    {

    }
}