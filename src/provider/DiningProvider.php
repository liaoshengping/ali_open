<?php


namespace Liaosp\AliOpen\provider;


use Liaosp\AliOpen\core\Container;
use Liaosp\AliOpen\functions\Dining;
use Liaosp\AliOpen\interfaces\Provider;

class DiningProvider implements Provider
{

    public function serviceProvider(Container $container)
    {
        $container['dining'] = function ($container){
            return new Dining($container);
        };
    }
}
