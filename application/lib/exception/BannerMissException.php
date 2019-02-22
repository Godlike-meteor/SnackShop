<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/18
 * Time: 20:56
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $mas = '请求的Banner不存在';
    public $errorCode = 40000;
}