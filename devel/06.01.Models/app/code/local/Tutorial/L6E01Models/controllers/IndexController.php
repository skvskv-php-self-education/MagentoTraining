<?php


class Tutorial_L6E01Models_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody("HELLO FROM ".__METHOD__);
    }

    public function layoutAction()
    {
        $this->loadLayout()->renderLayout();
    }
}
