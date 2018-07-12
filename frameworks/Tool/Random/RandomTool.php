<?php
/**
 * 随机工具
 * Date: 2018/6/4
 * Time: 12:07
 */
namespace Frameworks\Tool\Random;

class RandomTool
{
    /**
     * 获取随机字符串
     * @param int $length
     * @return string
     */
    public static function getRandomString($length = 8)
    {
        if (intval($length) > 0) {
            return str_random($length);
        }
        return '';
    }
}