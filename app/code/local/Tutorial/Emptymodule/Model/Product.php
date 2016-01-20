<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2016
 * Time: 0:06
 */
class Tutorial_Emptymodule_Model_Product extends Mage_Catalog_Model_Product
{
    public function getName()
    {
        $name = parent::getName();
        return "*$name*";
    }
}