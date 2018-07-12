<?php
/**
 * 基础返回数据操作
 * Date: 2018/6/11
 * Time: 14:59
 */
namespace Frameworks\Tool\Base\Response\Extend;

trait BaseResponseProcessorExtend
{

    public function successCode()
    {
        $this->code = static::SUCCESS_CODE;
    }

    public function errorCode()
    {
        $this->code = static::FAILURE_CODE;
    }

    public function setDataValue($field, $value)
    {
        if (!is_array($this->data)) {
            $this->emptyData();
        }
        array_set($this->data, $field, $value);
    }

    public function emptyData()
    {
        $this->data = [];
    }
}