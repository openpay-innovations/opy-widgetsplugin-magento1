<?php
class Openpay_Widgets_Model_System_Config_Source_Logocatalog
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'grey', 'label' => Mage::helper('adminhtml')->__('Grey')),
            array('value' => 'white', 'label' => Mage::helper('adminhtml')->__('White'))
            
        );

        return $options;
    }
}
