<?php

//require_once "app" . DS . "code" . DS . "core" . DS . "Mage" . DS . "Catalog" . DS . "controllers" . DS . "CategoryController.php";
require_once "Mage" . DS . "Catalog" . DS . "controllers" . DS . "CategoryController.php";

//class Tutorial_Emptymodule_Catalog_CategoryController extends Mage_Core_Controller_Front_Action
class Tutorial_Emptymodule_Catalog_CategoryController extends Mage_Catalog_CategoryController
{
    public function viewAction()
    {
        echo "It worked!";
        die();
    }
}