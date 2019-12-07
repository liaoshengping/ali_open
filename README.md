<h1 align="center"> 阿里巴巴开放平台SDK </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require liaosp/ali_open -vvv
```

## Usage
场景： 拉取阿里巴巴商家的采购数据，同步到erp上，采用的是多用户模式，即不需要获取token，直接到open.1688.com 获取持久access_token ，故没有把获取token 的方式分装到里面，大家可以参考这篇文章：https://liaosp.blog.csdn.net/article/details/103440299
说明：本例子是因为官方sdk看得太累了，所以自己封装一下签名，供大家参考！

```php
        $obj = new \Liaosp\AliOpen\AliOpen(['page'=>1]);
        $obj->setAppkey('你的appkey');
        $obj->setAppsecret('你的秘钥');
        $obj->setAccessToken('自己想办法去获取token，如果设置的是多用户单用户的直接复制，应用管理中的token');//参考：https://liaosp.blog.csdn.net/article/details/103440299
        $res =$obj->order->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')->get(); //api 就是阿里巴巴文档中的
        var_dump($res);
```

项目中可以继承他：

````php
<?php


namespace App\Services\AliOpen;


class AliOpen extends \Liaosp\AliOpen\AliOpen
{
    public function __construct($params = array())
    {
        $this->setAppkey('39376**');
        $this->setAppsecret('0RsvFZYV**');
        $this->access_token = '06410386-242c-41f6-8a20-5e7e0d2b6229';
        parent::__construct($params);
    }
}

````

获取订单列表的例子 
```php
        $get_data =( new AliOpen([     //这边的AliOpen ,是你设置appkey的对象
            'page'=>1,
            'pageSize'=>100,
        ]))
            ->order
            ->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')
            ->get();
```
获取订单详情的例子 
```php
        $get_data = (new AliOpen([
            'webSite'=>1688,
            'orderId'=>$this->app->order_id,
        ]))
            ->order
            ->setApi('com.alibaba.trade:alibaba.trade.get.buyerView-1')
            ->get();

```
和我做朋友？

https://www.cnblogs.com/liaosp/p/11075260.html

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liaoshengping/ali_open/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liaoshengping/ali_open/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
