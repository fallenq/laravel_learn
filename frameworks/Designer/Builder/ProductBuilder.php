<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/7/18
 * Time: 11:13
 */
namespace Frameworks\Designer\Builder;

class ProductBuilder
{
    protected $_product = null;
    protected $_configs = [];

    public function __construct($configs)
    {
        $this->_product = new Product();
        $this->_configs = $configs;
    }

    public function build()
    {
        $this->_product->setSize($this->_configs['size']);
        $this->_product->setType($this->_configs['type']);
        $this->_product->setColor($this->_configs['color']);
    }

    public function getProduct()
    {
        return $this->_product;
    }
}