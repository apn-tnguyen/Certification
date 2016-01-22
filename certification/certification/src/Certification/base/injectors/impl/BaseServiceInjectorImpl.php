<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:20 PM
 */
namespace Certification\Base\Injectors\Impl;

use Certification\Base\Consumers\Impl\BaseConsumer;
use Certification\Base\Injectors\IBaseServiceInjector;
use Certification\Base\Services\Impl\Base;
use Certification\Base\Services\Impl\BaseImpl;

class BaseServiceInjectorImpl implements IBaseServiceInjector {


    public function getBaseConsumer()
    {
        // TODO: Implement getBaseConsumer() method.
        return new BaseConsumer(new BaseImpl());
    }

}