<?php
class Openpay_Widgets_Model_System_Config_Source_Infobelt
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'homepage', 'label' => Mage::helper('adminhtml')->__('Home Page')),
            array('value' => 'acrossthesite', 'label' => Mage::helper('adminhtml')->__('Across the Site')),
            array('value' => 'off', 'label' => Mage::helper('adminhtml')->__('Off'))
           
        );

        return $options;
    }
}
