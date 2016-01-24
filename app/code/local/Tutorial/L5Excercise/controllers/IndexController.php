<?php


class Tutorial_L5Excercise_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $model = Mage::getModel('tutorial_l5excercise/nothing');
        $className = get_class();
        $method = __FUNCTION__;
        echo "<h3>{$className}::{$method} - Hello, fellas!</h3>";
//        echo "<pre>"; debug_print_backtrace(); echo "</pre>";
//        mageDebugBacktrace();
        echo "<br/>";
        Zend_Debug::dump(
            $model
        );
        die();
    }
}
