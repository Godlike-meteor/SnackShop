<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2019/3/6
 * Time: 15:51
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;

class Order extends BaseController
{
    // 用户在选择商品后，向API提交包含他选择商品的相关信息
    // API在接受到信息后，需要检查订单相关商品的库存量
    // 有库存，把订单数据存入数据库中。下单成功了，返回客户端消息，告诉客户端可以支付了
    // 调用我们的支付接口，进行支付
    // 还需要再次进行库存量检测
    // 服务器这边就可以调用微信的支付接口进行支付
    // 微信会返回给我们一个支付的结果（异步），根据微信的结果检测是否支付成功。
    // 成功：也需要进行库存量的检查
    // 成功：进行库存量的抠出。失败：返回一个支付失败的结果

    protected $beforeActionList = [
        'checkExclusiveScpoe' => ['only' => 'placeOrder']
    ];

    public function placeOrder()
    {

    }

    public function deleteOrder()
    {

    }
}