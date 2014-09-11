<?php
/*------------------------------------------------------------------------
# Websites: http://www.plazathemes.com/
-------------------------------------------------------------------------*/ 
class Magentothem_Themeoptions_Model_Config_Color
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'red', 'label'=>Mage::helper('adminhtml')->__('red')),
            array('value'=>'blue', 'label'=>Mage::helper('adminhtml')->__('blue')),
            array('value'=>'green', 'label'=>Mage::helper('adminhtml')->__('green')),
            array('value'=>'pink', 'label'=>Mage::helper('adminhtml')->__('pink'))
        );
    }

}
