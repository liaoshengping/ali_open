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
        $obj->setAccessToken('自己想办法去获取token，如果设置的是多用户单用户的直接复制，应用管理中的token');
        $res =$obj->order->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')->get();
        var_dump($res);
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liaosp/ali_open/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liaosp/ali_open/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT