<?php

class Tutorial_Emptymodule_Model_Observer
{
    public function productAfterLoad(Varien_Event_Observer $observer)
    {
        /**
         * @var Mage_Catalog_Model_Product | null
         */
        $product = $observer->getProduct();
        $product->setName($product->getName(). " - fcku yeah!!!");
    }
}