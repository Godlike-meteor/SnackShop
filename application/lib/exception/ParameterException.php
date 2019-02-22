<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/19
 * Time: 12:53
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}