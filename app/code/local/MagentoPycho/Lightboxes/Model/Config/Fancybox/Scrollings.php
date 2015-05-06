<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Scrollings
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'auto','label' => Mage::helper('lightboxes')->__('auto')),
            array('value'=>'yes','label' => Mage::helper('lightboxes')->__('yes')),
            array('value'=>'no','label' => Mage::helper('lightboxes')->__('no')),
        );
    }
}