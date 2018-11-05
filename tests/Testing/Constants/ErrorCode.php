<?php


namespace SwoftTest\Testing\Constants;

use Swoftx\Constants\Constants;

class ErrorCode extends Constants
{
    const SUCCESS = 0;

    /**
     * @Message('参数错误')
     */
    const PARAMS_INVALID = 500;
}