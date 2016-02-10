<?php

class N4cc12ae83864440aa5882925b0ab7fc5INFILE0fae8298b00345ac9926a5cf7778dec4_M7dd90a501e5a42a68313088eddfffe35INFILE0fae8298b00345ac9926a5cf7778dec4_Block_Duptest extends Mage_Core_Block_Text
{

    static protected $instanceCount = 0;

    protected $rn = null;
    protected $instanceNo = null;
    protected $token = null;

    /**
     * Here models & collections loaded, data processed.
     * Or in _prepareLayout()
     *
     * @param array $args
     */
    public function __construct(array $args = array())
    {

        $this->rn = mt_rand(1,1000);
        $this->instanceNo = ++static::$instanceCount;
        $this->token = 0;
        parent::__construct($args);
    }

    /**
     * Before rendering html, but after trying to load cache
     *
     * @return Mage_Core_Block_Abstract
     */
    protected function _beforeToHtml()
    {
        $this->token++;
        return parent::_beforeToHtml();
    }

    /**
     * Processing block html after rendering
     *
     * @param   string $html
     * @return  string
     */
    protected function _afterToHtml($html)
    {
        return parent::_afterToHtml($html); // TODO: Change the autogenerated stub
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        $classname = get_class($this);
        $result = "[{$classname}] #{$this->instanceNo} , invocation #{$this->token}";
        return $result;
    }


}