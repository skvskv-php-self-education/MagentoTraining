<?php


class Tutorial_X0401Excercise_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody("HELLO, WORLD!!");
    }

    public function helloAction()
    {
//        $block = Mage::getBlockSingleton('tutorial_x0401excercise/helloworld');
//        $block = $this->loadLayout()->getLayout()->createBlock('tutorial_x0401excercise/helloworld');
        $block = Mage::app()->getLayout()->createBlock('tutorial_x0401excercise/helloworld');

        $this->getResponse()
            ->setBody(
                $block->toHtml()
            );
    }
}
