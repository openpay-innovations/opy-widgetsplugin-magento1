<?php
class Openpay_Widgets_Model_System_Config_Source_Colors
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'amber', 'label' => Mage::helper('adminhtml')->__('Amber')),
            array('value' => 'grey', 'label' => Mage::helper('adminhtml')->__('Grey')),
            array('value' => 'white', 'label' => Mage::helper('adminhtml')->__('White'))
            
        );

        return $options;
    }
}
