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
use SwoftTest\Testing\Constants\ErrorCode2;

class ConstantsTest extends AbstractTestCase
{
    public function testGetMessage()
    {
        $res = ErrorCode::getMessage(ErrorCode::PARAMS_INVALID);
        $this->assertEquals('参数错误', $res);

        $res = ErrorCode2::getMessage(ErrorCode2::PARAMS_INVALID);
        $this->assertEquals('参数错误2', $res);

        $res = ErrorCode::getMessage(ErrorCode::PARAMS_INVALID);
        $this->assertEquals('参数错误', $res);

        $res = ErrorCode::getMessage(ErrorCode2::TOKEN_INVALID);
        $this->assertEquals('', $res);

        $res = ErrorCode2::getMessage(ErrorCode2::TOKEN_INVALID);
        $this->assertEquals('TOKEN非法', $res);
    }
}
