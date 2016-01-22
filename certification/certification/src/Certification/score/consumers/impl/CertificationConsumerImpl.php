<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:29 PM
 */
namespace Certification\Score\Consumers\Impl;

use Certification\Score\Consumers\ICertificationConsumer;
use Certification\Score\Services\ICertification;

class CertificationConsumerImpl implements ICertificationConsumer {

    private $iCertification;

    public function __construct($iCertification) {
        if ( !($iCertification instanceof  ICertification) ) {
            throw new \Exception('The parameters must be instance of ICertification');
        }
        $this->iCertification = $iCertification;
    }


    public function processToGetScore()
    {
        // TODO: Implement processToGetScore() method.
        return $this->iCertification->getScore();
    }

}