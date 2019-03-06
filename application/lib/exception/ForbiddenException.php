<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/6
 * Time: 15:36
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}