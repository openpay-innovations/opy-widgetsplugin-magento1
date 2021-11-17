<?php
class Openpay_Widgets_Model_System_Config_Source_Logocart
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'grey-on-amberbg', 'label' => Mage::helper('adminhtml')->__('Grey Logo with Amber Background')),
            array('value' => 'grey', 'label' => Mage::helper('adminhtml')->__('Grey'))
            
        );

        return $options;
    }
}
