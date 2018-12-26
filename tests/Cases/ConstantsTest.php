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

        $res = ErrorCode::getMessage(ErrorCode::SUCCESS);
        $this->assertEquals('', $res);

        $res = ErrorCode2::getMessage(ErrorCode2::TOKEN_INVALID_701);
        $this->assertEquals('TOKEN非法701', $res);
    }

    // public function testPattern()
    // {
    //     $pattern = "/\@Message\([\'|\\\"](.*)[\'|\\\"]\)/U";
    //     $time = microtime(true);
    //     $data1 = '* @Message("Test")';
    //     $data1 = "* @Message('Test')";
    //
    //     for ($i = 0; $i < 100000; $i++) {
    //         preg_match($pattern, $data1, $result);
    //         // preg_match($pattern, $data2, $result);
    //     }
    //
    //     echo microtime(true) - $time;
    //     echo PHP_EOL;
    //
    //     $pattern = "/\@Message\(\'(.*)\'\)/U";
    //     $time = microtime(true);
    //
    //     for ($i = 0; $i < 100000; $i++) {
    //         preg_match($pattern, $data1, $result);
    //         // preg_match($pattern, $data2, $result);
    //     }
    //
    //     echo microtime(true) - $time;
    //     echo PHP_EOL;
    // }
}
