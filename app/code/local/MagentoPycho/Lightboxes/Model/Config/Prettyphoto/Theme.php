<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Prettyphoto_Theme
{
    public function toOptionArray()
    {
                return array(
            array('value'=>'pp_default','label' => Mage::helper('lightboxes')->__('pp_default')),
            array('value'=>'light_rounded','label' => Mage::helper('lightboxes')->__('light_rounded')),
            array('value'=>'dark_rounded','label' => Mage::helper('lightboxes')->__('dark_rounded')),
            array('value'=>'light_square','label' => Mage::helper('lightboxes')->__('light_square')),
            array('value'=>'dark_square','label' => Mage::helper('lightboxes')->__('dark_square')),
            array('value'=>'facebook','label' => Mage::helper('lightboxes')->__('facebook')),
        );
    }
}