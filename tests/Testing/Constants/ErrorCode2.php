<?php


namespace SwoftTest\Testing\Constants;

use Swoftx\Constants\Constants;

class ErrorCode2 extends Constants
{
    /**
     * @Message('参数错误2')
     */
    const PARAMS_INVALID = 500;

    /**
     * @Message('TOKEN非法')
     */
    const TOKEN_INVALID = 700;

    /**
     * @Message("TOKEN非法701")
     */
    const TOKEN_INVALID_701 = 701;
}