<?php
class Openpay_Widgets_Model_System_Config_Source_Logos
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 'grey-on-amberbg', 'label' => Mage::helper('adminhtml')->__('Grey Logo with Amber Background')),
            array('value' => 'grey', 'label' => Mage::helper('adminhtml')->__('Grey')),
            array('value' => 'amber', 'label' => Mage::helper('adminhtml')->__('Amber')),
            array('value' => 'white', 'label' => Mage::helper('adminhtml')->__('White'))
            
        );

        return $options;
    }
}
