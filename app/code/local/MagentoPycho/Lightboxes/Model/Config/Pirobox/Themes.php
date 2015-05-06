<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Pirobox_Themes
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'demo1','label' => Mage::helper('lightboxes')->__('double border corners white/black')),
            array('value'=>'demo2','label' => Mage::helper('lightboxes')->__('black border corners + shadow')),
            array('value'=>'demo3','label' => Mage::helper('lightboxes')->__('white border corners + shadow')),
            array('value'=>'demo4','label' => Mage::helper('lightboxes')->__('shadow')),
            array('value'=>'demo5','label' => Mage::helper('lightboxes')->__('double border corners black/white')),
        );
    }
}