<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoftx\Constants;

use limx\Support\Str;
use Swoftx\Constants\Adapters\ReflectionAdapter;
use Swoftx\Constants\Exceptions\ConstantsException;

/**
 * Class Constants
 * @package Swoftx\Constants
 */
abstract class Constants
{
    public static $mapping;

    public static function __callStatic($name, $arguments)
    {
        if (!Str::startsWith($name, 'get')) {
            throw new ConstantsException('The function is not defined!');
        }

        if (!isset($arguments) || count($arguments) === 0) {
            throw new ConstantsException('The Code is required');
        }

        $code = $arguments[0];
        $name = strtolower(substr($name, 3));
        $class = get_called_class();

        if (isset(static::$mapping[$class][$name])) {
            return isset(static::$mapping[$class][$name][$code]) ? static::$mapping[$class][$name][$code] : '';
        }

        // 获取变量
        $ref = new \ReflectionClass(static::class);
        $classConstants = $ref->getReflectionConstants();

        $adapter = new ReflectionAdapter(static::class);
        $result = $adapter->getAnnotationsByName($name, $classConstants);

        static::$mapping[$class][$name] = $result;
        return isset(static::$mapping[$class][$name][$code]) ? static::$mapping[$class][$name][$code] : '';
    }
}
