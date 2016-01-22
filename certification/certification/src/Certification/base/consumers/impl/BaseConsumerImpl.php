<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:10 PM
 */
namespace Certification\Base\Consumers\Impl;

use Certification\Base\Consumers\IBaseConsumer;
use Certification\Base\Services\IBase;

class BaseConsumerImpl implements IBaseConsumer
{

    private $iBase;

    public function __construct(IBase $iBase)
    {
        $this->iBase = $iBase;
    }


    public function processToGetCIInstance()
    {
        return $this->iBase->getCI();
    }


}