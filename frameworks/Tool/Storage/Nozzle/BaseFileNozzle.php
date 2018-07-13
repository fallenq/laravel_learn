<?php
/**
 * 基础文件工具接口
 * Date: 2018/7/13
 * Time: 11:20
 */
namespace Frameworks\Tool\Storage\Nozzle;

interface BaseFileNozzle
{
    public function exists($path);
    public function storageObj();
    public function put($path, $contents);
    public function get($path);
}