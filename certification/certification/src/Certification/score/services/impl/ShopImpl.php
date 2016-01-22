<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 10:56 PM
 */
namespace Certification\Score\Services\Impl;

use Certification\Base\Injectors\IBaseServiceInjector;
use Certification\Score\Services\ICertification;

class ShopImpl implements ICertification {

    public function __construct($injector)
    {
        if ( !($injector instanceof IBaseServiceInjector) ) {
            throw new Exception('The injector class must be instance of IBaseServiceInjector');
        }
        $this->injector = $injector;
    }


    public function getScore()
    {
        // TODO: Implement getScore() method.
        $ci = $this->injector->getBaseConsumer();

        return $ci;
    }


}