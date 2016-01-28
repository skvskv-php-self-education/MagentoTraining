<?php

//class Tutorial_Emptymodule_IndexController extends Mage_Core_Controller_Front_Action
class Tutorial_Emptymodule_Catalog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "IndexController::indexAction() - helloWorld!";
        die();
    }
}