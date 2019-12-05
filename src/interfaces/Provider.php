<?php
namespace Liaosp\AliOpen\interfaces;

use Liaosp\AliOpen\core\Container;

interface Provider
{
    public function serviceProvider(Container $container);
}
