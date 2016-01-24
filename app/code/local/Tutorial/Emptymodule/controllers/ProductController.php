<?php

class Tutorial_Emptymodule_ProductController extends Mage_Core_Controller_Front_Action
{
    public function helloWorldAction()
    {
        echo "Hello, World!";
        die();
    }
}