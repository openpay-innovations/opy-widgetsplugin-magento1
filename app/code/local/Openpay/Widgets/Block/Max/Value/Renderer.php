<?php 
class Openpay_Widgets_Block_Max_Value_Renderer extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml($element) {
        //$amount = Mage::getStoreConfig('payment/openpay/max_order_total');
        $amount = Mage::helper('widgets')->getMaxTotal();
        $element->setData('value', $amount);
        $element->setData('readonly', 1);
        return parent::_getElementHtml($element);
    }
}