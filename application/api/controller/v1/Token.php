<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/22
 * Time: 15:10
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = '')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return $token;
    }
}