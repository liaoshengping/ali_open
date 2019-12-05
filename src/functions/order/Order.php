<?php


namespace Liaosp\AliOpen\functions\order;


use Liaosp\AliOpen\core\BaseClient;

class Order extends BaseClient
{
    /**
     * 订单列表
     * @return $this
     */
    public function buyerOrderList()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.getBuyerOrderList-1';

        return $this;
    }

    /**
     * 订单详情
     */
    public function buyerOrderDetail(){
        $this->url_info = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
    }




}
