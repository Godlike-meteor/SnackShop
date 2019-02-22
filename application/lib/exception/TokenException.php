<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/22
 * Time: 20:54
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $mag = 'Token已过期或无效Token';
    public $errorCode = 10001;
}