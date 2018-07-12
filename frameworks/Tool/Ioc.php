<?php
/**
 * Ioc控制反转
 * Date: 2018/7/11
 * Time: 14:26
 */
namespace Frameworks\Tool;

class Ioc
{
    /**
     * 获取类的对象实例
     * @param $className
     * @param array $params
     * @return object
     * @throws \ReflectionException
     */
    public static function getInstance($className, $params = [])
    {
        $paramArr = self::getMethodParams($className);
        return (new \ReflectionClass($className))->newInstanceArgs(...array_merge($paramArr, $params));
    }

    /**
     * 执行类的方法
     * @param $className
     * @param $methodName
     * @param array $params
     * @param array $instanceParams
     * @return mixed
     * @throws \ReflectionException
     */
    public static function make($className, $methodName, $params = [], $instanceParams = [])
    {
        $instance = self::getInstance($className, $instanceParams);
        $paramArr = self::getMethodParams($className, $methodName);
        return $instance->{$methodName}(...array_merge($paramArr, $params));
    }

    /**
     * 获得类的方法参数，只获得有类型的参数
     * @param $className
     * @param string $methodsName
     * @return array
     * @throws \ReflectionException
     */
    protected static function getMethodParams($className, $methodsName = '__construct')
    {
        // 通过反射获得该类
        $class = new \ReflectionClass($className);
        // 记录参数，和参数类型
        $paramArr = [];
        // 判断该类是否有构造函数
        if ($class->hasMethod($methodsName)) {
            // 获得构造函数
            $construct = $class->getMethod($methodsName);
            $params = $construct->getParameters();
            if (count($params) > 0) {
                // 判断参数类型
                foreach ($params as $key => $param) {
                    if ($paramClass = $param->getClass()) {
                        // 获得参数类型名称
                        $paramClassName = $paramClass->getName();
                        // 获得参数类型
                        $args = self::getMethodParams($paramClassName);
                        $paramArr[] = (new \ReflectionClass($paramClass->getName()))->newInstanceArgs($args);
                    } else {
                        $paramArr[] = null;
                    }
                }
            }
        }
        return $paramArr;
    }
}