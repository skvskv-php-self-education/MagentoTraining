<?php


class Tutorial_L4E2Echoparameters_Block_Catalog_Product_View extends Mage_Catalog_Block_Product_View
{
    protected function _toHtml()
    {
        $localHtmlContent = "Yay! Overridden by " . get_class($this);
        $parentHtml = parent::_toHtml();

        // It's the Fukken Magick I don't understand a bit
        // makes multiple calls to the method, and thus I compare against alias
        $htmlContent = 'product.info'==$this->_alias ? $localHtmlContent. $parentHtml : $parentHtml ;

        return $htmlContent;
    }
}