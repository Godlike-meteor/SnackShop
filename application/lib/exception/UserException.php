<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/5
 * Time: 15:34
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $mag = '用户不存在';
    public $errorCode = 60000;
}