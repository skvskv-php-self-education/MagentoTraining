<?php

class Tutorial_L4E2Echoparameters_Block_Registry extends Mage_Core_Block_Template
{
    /**
     * @var null | mixed
     */
    protected $l4e2_parameter = null;

    public function __construct(array $args = array())
    {
        parent::__construct($args);
        $this->setTemplate('Tutorial_L4E2Echoparameters/registry.phtml');
    }

    /**
     * Preparing global layout
     *
     * You can redefine this method in child classes for changing layout
     *
     * @return Mage_Core_Block_Abstract
     */
    protected function _prepareLayout()
    {
        $this->l4e2_parameter = Mage::registry('l4e2_parameter');
        return parent::_prepareLayout();
    }

}