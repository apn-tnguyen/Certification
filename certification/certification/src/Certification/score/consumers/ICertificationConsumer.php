<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:27 PM
 */
namespace Certification\Score\Consumers;

interface ICertificationConsumer {

    public function processToGetScore();

}