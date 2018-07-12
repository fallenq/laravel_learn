<?php
/**
 * 时间工具
 * Date: 2018/6/11
 * Time: 15:10
 */
namespace Frameworks\Tool\Base;

class TimeTool
{
    const SIMPLE_DATE_TYPE      = 1;
    const SPECIAL_DATE_TYPE     = 2;
    const FRIEND_DATE_TYPE      = 3;

    const BASE_DATE_FORMAT      = 'Y-m-d H:i:s';
    const SIMPLE_DATE_FORMAT    = 'Y-m-d';

    /**
     * 友好时间
     * @param $btime
     * @param array ...$options
     * @return false|string
     */
    public static function friendDate($btime, ...$options)
    {
        $etime=time();

        if ($btime < $etime) {
            $stime = $btime;
            $endtime = $etime;
        } else {
            $stime = $etime;
            $endtime = $btime;
        }
        $timec = $endtime - $stime;
        /* 2015-05-21 cyg 修改
        10秒之前，显示刚刚
        60秒之前显示x秒前，如58秒前
        1分钟-59分钟显示x分钟前，如58分钟前
        60分钟-今日24点之前显示x小时前，如16小时前
        第二日，显示昨天时间，如昨天8:00
        第三日，显示前天时间 前天8:00
        第四日起，06-27 8:00
        跨年，2013-06-27 8:00
        */
        if($timec <10){
            return '刚刚';
        }
        if($timec <60){
            return $timec.'秒前';
        }
        if($timec <60*60){
            return floor($timec/60).'分钟前';
        }
        //今晚最后时间
        $nightEnd = strtotime(date("y-m-d 23:59:59"));
        $morningstart = mktime(0,0,0,date("m",time()),date("d",time()),date("Y",time()));

        if(($btime<$nightEnd) && ($btime>=$morningstart)){
            return floor($timec/(60*60)).'小时前';
        }
        //明晚最后时间
        if($btime>=($morningstart-24*60*60) && $btime<$morningstart){
            return date('昨天 H:i',$btime);
        }
        //前天晚上的最后时间
        if($btime>=($morningstart-(24*60*60)*2) && $btime<$morningstart-24*60*60){
            return date('前天 H:i',$btime);
        }
        //后天到 今年年的时间
        if( ($btime>= mktime(0,0,0,1,1,date("Y",time())))){
            return date("m-d H:i",$btime);
        }
        //今年年初的时间
        if( $btime< mktime(0,0,0,1,1,date("Y",time())) ){
            return date("Y-m-d H:i",$btime);
        }
    }

    /**
     * 格式化时间戳
     * @param null $timestamp
     * @param array ...$options
     * @return false|string
     */
    public static function formatTimestamp($timestamp = null, ...$options)
    {
        $timestamp = !empty($timestamp) ? $timestamp : time();
        $method = array_get($options, 0, 0);
        /**
         * method
         *      1   -   简易日期
         *      2   -   指定格式化
         *      3   -   友好时间
         *      default -   标准日期
         */
        switch ($method) {
            case 1:
                return date(static::SIMPLE_DATE_FORMAT, $timestamp);
            case 2:
                $stampOption = array_get($options, 1, '');
                return self::formatTimestamp(strtotime($stampOption, $timestamp));
            case 3:
                return self::friendDate($timestamp);
            default:
                return date(static::BASE_DATE_FORMAT, $timestamp);
        }
    }

    /**
     * Get the last day of the month
     * @param $year
     * @param $month
     * @return int
     */
    public static function getMonthLast($year, $month)
    {
        if (in_array($month, [1, 3, 5, 7, 8, 10, 12])) {
            return 31;
        } else if (in_array($month, [4, 6, 9, 11])) {
            return 30;
        } else if ($month == 2) {
            if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 > 0)) {
                return 29;
            } else {
                return 28;
            }
        }
        return 0;
    }
}