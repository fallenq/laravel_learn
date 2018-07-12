<?php
/**
 * 基础返回结构对象
 * Date: 2018/6/6
 * Time: 17:03
 */
namespace Frameworks\Tool\Base\Response;

use Frameworks\Tool\Base\Response\Extend\BaseResponseExtend;
use Frameworks\Tool\Base\Response\Extend\BaseResponseProcessorExtend;
use Frameworks\Tool\Base\Response\Nozzle\BaseResponseNozzle;

class BaseResponse implements BaseResponseNozzle
{
    use BaseResponseExtend, BaseResponseProcessorExtend;
}