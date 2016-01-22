<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:32 PM
 */

namespace Certification\Score\Injectors\Impl;

use Certification\Score\Consumers\Impl\CertificationConsumerImpl;
use Certification\Score\Injectors\ICertificationInjector;
use Certification\Score\Services\Impl\ShopImpl;

class ShopServiceInjector implements ICertificationInjector {

    public function getConsumer()
    {
        // TODO: Implement getConsumer() method.
        return new CertificationConsumerImpl(new ShopImpl());
    }

}