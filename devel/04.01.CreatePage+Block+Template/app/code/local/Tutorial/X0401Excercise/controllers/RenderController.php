<?php


class Tutorial_X0401Excercise_RenderController extends Mage_Core_Controller_Front_Action
{
    public function templateAction()
    {
        $entity = $this->getLayout()
            ->createBlock('core/template')
            ->setTemplate('tutorial_x0401excercise/random.phtml');
        $content = $entity->toHtml();

        $this->getResponse()->setBody( $content );
    }
}