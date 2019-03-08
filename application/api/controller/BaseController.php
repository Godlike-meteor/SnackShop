<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/7
 * Time: 15:30
 */

namespace app\api\controller;


use think\Controller;
use app\api\service\Token as TokenService;

class BaseController extends Controller
{
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScpoe(){
        TokenService::needExclusiveScope();
    }
}