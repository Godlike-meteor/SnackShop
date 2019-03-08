<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/7
 * Time: 16:04
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;

class OrderPlace extends BaseValidate
{
    protected $products = [
        [
            'product_id' => 1,
            'count' => 3,
        ], [
            'product_id' => 2,
            'count' => 3,
        ], [
            'product_id' => 3,
            'count' => 3,
        ],
    ];

    protected $rule = [
        'products' => 'checkProducts'
    ];

    protected function checkProducts($values){
        if(empty($values)){
            throw new ParameterException([
                'msg' => '商品列表不能为空'
            ]);
        }
        if(is_array($values)){
            throw new ParameterException([
                'msg' => '商品参数不正确'
            ]);
        }
    }
}