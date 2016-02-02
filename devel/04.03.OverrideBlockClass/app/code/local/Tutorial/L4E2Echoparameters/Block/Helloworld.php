<?php

class Tutorial_L4E2Echoparameters_Block_Helloworld extends Mage_Core_Block_Template
{
    protected function _toHtml()
    {
        return "HELLO from ". __METHOD__;
    }
}