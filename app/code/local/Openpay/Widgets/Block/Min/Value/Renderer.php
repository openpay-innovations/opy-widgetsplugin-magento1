<?php 
class Openpay_Widgets_Block_Min_Value_Renderer extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml($element) {
        //$amount = Mage::getStoreConfig('payment/openpay/min_order_total');
        $amount = Mage::helper('widgets')->getMinTotal();
        $element->setData('value', $amount);
        $element->setData('readonly', 1);
        return parent::_getElementHtml($element);
    }
}