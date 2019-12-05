<?php


namespace Liaosp\AliOpen\provider;


use Liaosp\AliOpen\core\Container;
use Liaosp\AliOpen\functions\order\Order;
use Liaosp\AliOpen\interfaces\Provider;

class StoreProvider implements Provider

{

    public function serviceProvider(Container $container)
    {
        $container['order'] = function ($container){
            return new Order($container);
        };
    }
}
