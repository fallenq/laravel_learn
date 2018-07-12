<?php
/**
 * 基础返回结构接口
 * Date: 2018/6/6
 * Time: 17:08
 */
namespace Frameworks\Tool\Base\Response\Nozzle;

interface BaseResponseNozzle
{
    const SUCCESS_CODE = 200;
    const FAILURE_CODE = 500;
    const DEFAULT_FAILURE_MESSAGE = '提交失败';
    
    public function conform();
    public function toJson();
    public function toJsonp($callback = "callback");
}