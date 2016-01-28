<?php


class Tutorial_L5Excercise_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $model = Mage::getModel('tutorial_l5excercise/nothing');
        $className = get_class();
        $method = __FUNCTION__;
        echo "<h3>{$className}::{$method} - Hello, fellas!</h3>";you
//        echo "<pre>"; debug_print_backtrace(); echo "</pre>";
//        mageDebugBacktrace();
        echo "<br/>";
        Zend_Debug::dump(
            $model
        );
        die();
    }

    protected function getLayoutXmlMerged()
    {
        $layoutXmlMergedXml = $this->loadLayout()->getLayout()->getUpdate()->asString();
        return $layoutXmlMergedXml;
    }

    public function layoutAction()
    {
        $this->getResponse()
            ->setHeader('Content-Type', 'text/plain')
            ->setBody( $this->getLayoutXmlMerged() );
    }

    public function defaultAction()
    {
        $this->loadLayout()
            ->renderLayout();
    }

    public function modelAction()
    {
        $model = Mage::getModel('tutorial_l5excercise/nothing');
        Zend_Debug::dump(
//            $model
            $model->debug()
        );
    }
}
