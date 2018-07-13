<?php
/**
 * 基础返回数据结构基础操作
 * Date: 2018/6/6
 * Time: 17:17
 */
namespace Frameworks\Tool\Base\Response\Extend;

use Frameworks\Tool\Base\Response\ResponseConfig;

trait BaseResponseExtend
{
    protected $code = 0;
    protected $msg = '';
    protected $data = [];

    public function initResponse()
    {
        $this->code = 0;
        $this->msg  = '';
        $this->data = [];
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
        return null;
    }

    public function conform()
    {
        return [
            'code'  =>  intval($this->code),
            'msg'   =>  !empty($this->msg)? $this->msg: '',
            'data'  =>  !empty($this->data)? $this->data: [],
        ];
    }

    public function toJson()
    {
        return json_encode($this->conform());
    }

    public function toJsonp($callback = "callback")
    {
        if (empty(ResponseConfig::ALLOW_USE_JSONP)) {
            return '';
        }
        $outJson = $this->toJson();
        if (empty($callback)) {
            return $outJson;
        }
        return "{$callback}({$outJson})";
    }
}