<?php

namespace Liaosp\AliOpen;

use Liaosp\AliOpen\core\ContainerBase;
use Liaosp\AliOpen\provider\DiningProvider;
use Liaosp\AliOpen\provider\StoreProvider;

/**
 * Class Application
 * @property \Liaosp\AliOpen\functions\Dining dining
 * @property \Liaosp\AliOpen\functions\order\Order order
 */
class AliOpen extends ContainerBase
{
    /**
     * 服务提供者
     * @var array
     */
    public function __construct($params = array())
    {
//        $this->pushMiddlewares(array(\Liaosp\AliOpen\functions\Log::class,'addLog'),'log'); //更新获取access_token

        parent::__construct($params);
    }

    protected $provider = [
        DiningProvider::class,
        StoreProvider::class,
        //...其他服务提供者
    ];
}
