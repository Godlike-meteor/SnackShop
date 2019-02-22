<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/18
 * Time: 15:23
 */

namespace app\api\validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id' => 'id必须是正整数',
    ];
}