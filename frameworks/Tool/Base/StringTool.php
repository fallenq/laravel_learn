<?php
/**
 * StringTool
 * Date: 2018/6/4
 * Time: 11:49
 */
namespace Frameworks\Tool\Base;

class StringTool
{
    const TRIM_METHOD   = 0;
    const LTRIM_METHOD  = 1;
    const RTRIM_METHOD  = 2;

    public static function trim($params, $method = 0, $charlist = null)
    {
        $methods = [
            static::TRIM_METHOD     => 'trim',
            static::LTRIM_METHOD    => 'ltrim',
            static::RTRIM_METHOD    => 'rtrim'
        ];
        if (empty($params) || !in_array($method, array_keys($methods))) {
            return $params;
        }
        $callMethod = $methods[$method];
        if (is_array($params)) {
            foreach ($params as &$param) {
                if (!is_null($charlist)) {
                    $param = call_user_func($callMethod, $param, $charlist);
                } else {
                    $param = call_user_func($callMethod, $param);
                }
            }
        } else if (is_string($params)) {
            if (!is_null($charlist)) {
                $params = call_user_func($callMethod, $params, $charlist);
            } else {
                $params = call_user_func($callMethod, $params);
            }

        }
        return $params;
    }

    /**
     * 字符串长度
     * @param $source
     * @param string $type
     * @return int
     */
    public static function length($source, $type = 'utf-8')
    {
        return mb_strlen($source, $type);
    }

    /**
     * 输出文本处理
     * @param $text
     * @param bool $multiline
     * @return mixed|string
     */
    public static function handleOutput($text, $multiline=true) {
        $text = stripslashes($text);
        if ($multiline) {
            $text = htmlspecialchars($text);
            $text = str_replace(" ", "&nbsp;", $text);
            $text = nl2br($text);
        }
        return $text;
    }

    /**
     * utf字符串截取
     * @param $str
     * @param $start
     * @param int $limit
     * @param bool $adddot
     * @return string
     */
    public static function substr($str, $start, $limit = 80, $adddot=false, $suffix = '', $codeType = 'utf-8') {
        $result = mb_substr($str, $start, $limit, $codeType);
        if ($adddot && $start == 0) {
            if (!empty($suffix)) {
                $result = str_limit($str, $limit, $suffix);
            } else {
                $result = str_limit($str, $limit);
            }
        }
        return $result;
    }

    /**
     * 删除换行符
     * @param $str
     * @return mixed
     */
    public static function removeLines($str)
    {
        $str = str_replace ( "\r\n", '', $str );
        $str = str_replace ( "\r", '', $str );
        $str = str_replace ( "\n", '', $str );
        $str = str_replace ( "'", '&quot;', $str );
        $str = str_replace ( '"', '&quot;', $str );
        $str = str_replace ( "&nbsp;", ' ', $str );
        return $str;
    }

    /**
     * 过滤表情
     * @param  [type] $content [description]
     * @return [type]          [description]
     */
    public static function filterFace($content)
    {
        return preg_replace_callback('/[\xf0-\xf7].{3}/', function($r) { return '';}, $content);
    }
}