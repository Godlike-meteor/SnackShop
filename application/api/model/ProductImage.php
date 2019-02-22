<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/2/23
 * Time: 0:31
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id','delete_time','product_id'];

    public function imgUrl(){
        return $this->belongsTo('Image','img_id','id');
    }
}