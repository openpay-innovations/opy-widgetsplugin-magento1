<?php
class Openpay_Widgets_Model_System_Config_Source_Tiers
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(
            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('1')),
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('2')),
            array('value' => 3, 'label' => Mage::helper('adminhtml')->__('3')),
            array('value' => 4, 'label' => Mage::helper('adminhtml')->__('4')),
            array('value' => 5, 'label' => Mage::helper('adminhtml')->__('5')),
            array('value' => 6, 'label' => Mage::helper('adminhtml')->__('6')),
            array('value' => 7, 'label' => Mage::helper('adminhtml')->__('7')),
            array('value' => 8, 'label' => Mage::helper('adminhtml')->__('8')),
            array('value' => 9, 'label' => Mage::helper('adminhtml')->__('9')),
            array('value' => 10, 'label' => Mage::helper('adminhtml')->__('10')),
            array('value' => 11, 'label' => Mage::helper('adminhtml')->__('11')),
            array('value' => 12, 'label' => Mage::helper('adminhtml')->__('12')),
            array('value' => 13, 'label' => Mage::helper('adminhtml')->__('13')),
            array('value' => 14, 'label' => Mage::helper('adminhtml')->__('14')),
            array('value' => 15, 'label' => Mage::helper('adminhtml')->__('15')),
            array('value' => 16, 'label' => Mage::helper('adminhtml')->__('16')),
            array('value' => 17, 'label' => Mage::helper('adminhtml')->__('17')),
            array('value' => 18, 'label' => Mage::helper('adminhtml')->__('18')),
            array('value' => 19, 'label' => Mage::helper('adminhtml')->__('19')),
            array('value' => 20, 'label' => Mage::helper('adminhtml')->__('20')),
            array('value' => 21, 'label' => Mage::helper('adminhtml')->__('21')),
            array('value' => 22, 'label' => Mage::helper('adminhtml')->__('22')),
            array('value' => 23, 'label' => Mage::helper('adminhtml')->__('23')),
            array('value' => 24, 'label' => Mage::helper('adminhtml')->__('24'))            
        );

        return $options;
    }
}