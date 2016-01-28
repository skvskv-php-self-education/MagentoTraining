<?php

class Tutorial_Emptymodule_Foo_BarController extends Mage_Core_Controller_Front_Action
//class Tutorial_Emptymodule_BarController extends Mage_Core_Controller_Front_Action
//class Tutorial_Emptymodule_FooBarController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "BarController::indexAction() - FooBarBaz!";
        die();
    }
}