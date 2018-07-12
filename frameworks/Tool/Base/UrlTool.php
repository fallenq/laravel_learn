<?php
/**
 * url tool
 * Date: 2018/6/4
 * Time: 14:12
 */
namespace Frameworks\Tool\Base;

class UrlTool
{
    public static function appPath($path = '')
    {
        return app_path($path);
    }

    public static function basePath($path = '')
    {
        return base_path($path);
    }

    public static function publicPath($path = '')
    {
        return public_path($path);
    }

    public static function resourcePath($path = '')
    {
        return resource_path($path);
    }

    public static function storagePath($path = '')
    {
        return storage_path($path);
    }
}