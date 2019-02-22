<?php

namespace app\api\model;

class Product extends BaseModel
{
    protected $hidden = [
        'delete_time', 'main_img_id', 'pivot', 'from',
        'category_id', 'create_time', 'update_time',
    ];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public function imgs()
    {
        return $this->hasMany('ProductImage','product_id','id');
    }

    public function properties()
    {
        return $this->hasMany('ProductProperty','product_id','id');
    }

    public static function getMostRecent($count)
    {
        $product = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $product;
    }

    public static function getProductByCategoryID($categoryID)
    {
        $products = self::where('category_id', '=', $categoryID)
            ->select();
        return $products;
    }

    public static function getProductDetail($id)
    {
        $product = self::with('imgs,properties')
            ->find($id);
        return $product;
    }
}
