<?php
class Openpay_Widgets_Block_Checkout extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
    	$helper = Mage::helper('widgets/data');
    	if ($helper->isCheckoutWidgetEnabled()) {
	        $this->setTemplate('openpay/checkout/form.phtml')
	        	->setMethodLabelAfterHtml('<span class="learn-more"><opy-learn-more-button></opy-learn-more-button></span>');
	    }

        parent::_construct();
    }
}
