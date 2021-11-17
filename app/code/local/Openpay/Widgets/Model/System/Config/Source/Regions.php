<?php
class Openpay_Widgets_Model_System_Config_Source_Regions
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'AU', 'label' => Mage::helper('adminhtml')->__('Australia')),
            array('value' => 'UK', 'label' => Mage::helper('adminhtml')->__('United Kingdom'))
        );

        return $options;
    }
}