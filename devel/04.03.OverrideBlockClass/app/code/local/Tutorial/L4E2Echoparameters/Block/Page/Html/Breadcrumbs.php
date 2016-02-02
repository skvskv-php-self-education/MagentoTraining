<?php


class Tutorial_L4E2Echoparameters_Block_Page_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    public function __construct()
    {
        parent::__construct();
        $this->addCrumb('GOOGLE', 'Google');
    }

    protected function _toHtml()
    {
//        $localHtml = "<h3>Duck a Tuck with a Christmas Tree!!!</h3>";
        $parentHtml = parent::_toHtml();
//
//        $htmlContent = $localHtml. $parentHtml;
        return $parentHtml;
    }

}