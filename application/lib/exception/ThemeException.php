<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/22
 * Time: 10:33
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $mag = '指定主题不存在，请检查主题ID';
    public $errorCode = 30000;
}