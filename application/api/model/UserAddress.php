<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/5
 * Time: 16:51
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id','delete_time','user_id'];
}