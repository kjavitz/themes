<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Lightboxtypes
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'fancybox','label' => Mage::helper('lightboxes')->__('FancyBox')),
            array('value'=>'pirobox','label' => Mage::helper('lightboxes')->__('PiroBox')),
            array('value'=>'piroboxextended','label' => Mage::helper('lightboxes')->__('PiroBox Extended')),
            array('value'=>'prettyphoto','label' => Mage::helper('lightboxes')->__('prettyPhoto')),
            array('value'=>'lightboxclone','label' => Mage::helper('lightboxes')->__('Lightbox Clone')),
        );
    }
}