<?php
/**
 * 基础文件Trait
 * Date: 2018/7/13
 * Time: 11:29
 */
namespace Frameworks\Tool\Storage\Extend;

use Illuminate\Support\Facades\Storage;

trait BaseFileExtend
{
    protected $_disk = '';
    protected $_storageObj = null;

    public static function getInstance($disk)
    {
        $instance = new static();
        $instance->_disk = $disk;
        return $instance;
    }

    private function hasDisk()
    {
        if (empty($this->_disk)) {
            return false;
        }
        return true;
    }

    public function storageObj()
    {
        if (!$this->hasDisk()) {
            return false;
        }
        if (empty($this->_storageObj)) {
            if ($storageObj = Storage::disk($this->_disk)) {
                $this->_storageObj = $storageObj;
                return $this->_storageObj;
            }
        } else {
            return $this->_storageObj;
        }
        return false;
    }

    public function exists($path)
    {
        if ($storage = $this->storageObj()) {
            return $storage->exists($path);
        }
        return false;
    }

    public function put($path, $contents)
    {
        if ($storage = $this->storageObj()) {
            return $storage->put($path, $contents);
        }
        return false;
    }

    public function get($path)
    {
        if ($this->exists($path)) {
            return $this->storageObj()->get($path);
        }
        return false;
    }
}