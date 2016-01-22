<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 1/21/2016
 * Time: 11:06 PM
 */
namespace Base\Services\Impl;

use Base\Services\IBase;

class BaseImpl implements IBase {


    public function getCI()
    {
        // TODO: Implement getCI() method.
        return get_instance();
    }


}