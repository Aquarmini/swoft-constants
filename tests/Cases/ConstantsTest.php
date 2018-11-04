<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace SwoftTest\Cases;

use SwoftTest\Testing\Constants\ErrorCode;

class ConstantsTest extends AbstractTestCase
{
    public function testGetMessage()
    {
        $res = ErrorCode::getMessage(ErrorCode::PARAMS_INVALID);

        var_dump($res);
    }
}
