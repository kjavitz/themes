<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Titlepositions
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'outside','label' => Mage::helper('lightboxes')->__('outside')),
            array('value'=>'inside','label' => Mage::helper('lightboxes')->__('inside')),
            array('value'=>'over','label' => Mage::helper('lightboxes')->__('over')),
        );
    }
}