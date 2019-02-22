<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/22
 * Time: 18:22
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $mag = '微信服务器接口调用失败';
    public $errorCode = 999;
}