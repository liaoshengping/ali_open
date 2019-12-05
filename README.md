<h1 align="center"> 阿里巴巴开放平台 </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require liaosp/ali_open -vvv
```

## Usage

说明：本例子是因为学习官方sdk太累了没有去学，所以自己封装一下简单的签名请求

```php
        $obj = new \Liaosp\AliOpen\AliOpen();
        $obj->setAppkey('你的appkey');
        $obj->setAppsecret('你的秘钥');
        $obj->setAccessToken('自己想办法去获取token，如果设置的是多用户单用户的直接复制，应用管理中的token');//参考：http://www.04007.cn/article/5.html
        $res =$obj->order->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')->get(); //api 就是阿里巴巴文档中的
        var_dump($res);
```

项目中可以继承他：

````
<?php


namespace App\Services\AliOpen;


class AliOpen extends \Liaosp\AliOpen\AliOpen
{
    public function __construct($params = array())
    {
        $this->setAppkey('3937604');
        $this->setAppsecret('0RsvFZYVQd');
        $this->access_token = '06410386-242c-41f6-8a20-5e7e0d2b6229';
        parent::__construct($params);
    }
}

````


和我做朋友？

https://www.cnblogs.com/liaosp/p/11075260.html

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liaosp/ali_open/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liaosp/ali_open/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT