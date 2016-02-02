<?php


class Tutorial_L4E2Echoparameters_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody("HELLO FROM ".__METHOD__."!!");
    }

    public function registryAction()
    {
        Mage::register('l4e2_parameter', 'Once upon a time in Magento world...');
        $block = $this->getLayout()->createBlock('tutorial_l4e2echoparameters/registry');
        $htmlContent = $block->toHtml();
        $this->getResponse()->setBody($htmlContent);
    }

    public function listAction()
    {
        Mage::register('l4e2_parameter', 'Once upon a time in Magento world...');
        $listBlock = $this->getLayout()->createBlock('core/text_list');
        $registryBlock = $this->getLayout()->createBlock('tutorial_l4e2echoparameters/registry');
        $templateBlock = $this->getLayout()->createBlock('core/template')->setTemplate('Tutorial_L4E2Echoparameters/random.phtml');
        $textBlock = $this->getLayout()->createBlock('core/text')->setText('<h3>Text block content</h3>');
        $listBlock->insert($registryBlock);
        $listBlock->insert($templateBlock);
        $listBlock->insert($textBlock);
        $htmlContent = $listBlock->toHtml();

//        $this->getResponse()->setBody( $htmlContent );
        $this->loadLayout();
        $this->getLayout()
            ->getBlock('content')
            ->insert($listBlock);
        $this->renderLayout();


    }
}
