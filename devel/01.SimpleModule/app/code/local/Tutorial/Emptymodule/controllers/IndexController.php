<?php

class Tutorial_Emptymodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "IndexController::indexAction() - helloWorld!";
        die();
    }
    public function geeeAction()
    {
        echo "IndexController::geeAction() - helloWorld!";
        die();
    }
}