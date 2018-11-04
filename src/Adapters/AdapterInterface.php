<?php
// +----------------------------------------------------------------------
// | AdapterInterface.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Swoftx\Constants\Adapters;

interface AdapterInterface
{
    public function __construct($class);

    public function getAnnotationsByName($name, array $classConstants);
}
