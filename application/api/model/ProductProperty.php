<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/23
 * Time: 0:35
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['product_id','delete_time','id'];
}