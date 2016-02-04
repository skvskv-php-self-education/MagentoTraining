<?php


class Tutorial_L4E2Echoparameters_Block_Page_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{

    public function __construct()
//    public function _construct()
    {
        parent::__construct();
        $this->addCrumb(
            'GOOGLE',
            ['label'=>'Doogle', 'title'=>'Woogle', 'link'=>'http://google.com',]
//            ['label'=>'Doogle', 'title'=>'Woogle', 'link'=>'http://google.com', 'first'=>true, ]
        );
    }
/*
    protected function _toHtml()
    {
        $parentHtml = parent::_toHtml();
        return $parentHtml;
    }
*/

}