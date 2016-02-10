<?php


class Tutorial_Layouthandles_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody("HELLO FROM ".__METHOD__);
    }

    public function layoutAction()
    {
        $this->loadLayout()->renderLayout();
//        $this->loadLayout('cms_index_index')->renderLayout();
    }

    public function stdhandleAction()
    {
        $this->loadLayout()->renderLayout();
//        $this->loadLayout('cms_index_index')->renderLayout();
    }

    public function handleAction()
    {
        $this->loadLayout('cool_handle')->renderLayout();
    }

    public function benhandleAction()
    {
        $this->loadLayout('Ben_Updatehandle')->renderLayout();
    }

    public function storesAction()
    {
        $storesCollection = Mage::app()->getStore()->getCollection();
        /**
         * @var $store Mage_Core_Model_Store
         */
        foreach ($storesCollection as $store)
        {
//            Zend_Debug::dump( $store );
            Zend_Debug::dump(
                "{$store->getCode()} :: root category Id = {$store->getRootCategoryId()}"
//                "{$store->getCode()} :: root category Id = {$store->}"
            );

        }
    }
}
