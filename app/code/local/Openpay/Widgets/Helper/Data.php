<?php
class Openpay_Widgets_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return Mage::getStoreConfig('widgets/general/enable');
    }

    public function getRegion()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/general/region');
        }

        return false;
    }

    public function getCurrency()
    {
        if ($this->isEnabled()) {
            $currency_code = Mage::app()->getStore()->getCurrentCurrencyCode();
            return Mage::app()->getLocale()->currency($currency_code)->getSymbol();
        }

        return false;
    }

    public function getTiers()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/general/tiers');
        }

        return false;
    }

    public function getMinTotal()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('payment/openpay/min_price');
            //return Mage::getStoreConfig('payment/openpay/min_order_total');
        }

        return false;
    }

    public function getMaxTotal()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('payment/openpay/max_price');
            //return Mage::getStoreConfig('payment/openpay/max_order_total');
        }

        return false;
    }

    public function getHeaderWidgetInfobelt()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/header/infobelt');
        }

        return false;
    }

    public function getHeaderWidgetColor()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/header/color');
        }

        return false;
    }

    public function getHeaderWidgetSticky()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/header/Sticky');
        }

        return false;
    }

    public function isProductWidgetEnabled()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/product/enable');
        }

        return false;
    }

    public function getProductLogo()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/product/productlogo');
        }

        return false;
    }

    public function isCatalogWidgetEnabled()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/catalog/enable');
        }

        return false;
    }


    public function isCatalogLogo()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/catalog/logo');
        }

        return false;
    }

    public function getCatalogLogo()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/catalog/cataloglogo');
        }

        return false;
    }

    public function isCartWidgetEnabled()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/cart/enable');
        }

        return false;
    }

    public function getCartLogo()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/cart/cartlogo');
        }

        return false;
    }


    public function isCheckoutWidgetEnabled()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/checkout/enable');
        }
        
        return false;
    }

    public function getInstalmentText()
    {
        if ($this->isCheckoutWidgetEnabled()) {
            return Mage::getStoreConfig('widgets/checkout/instalment');
        }
        
        return false;
    }

    public function getRedirectText()
    {
        if ($this->isCheckoutWidgetEnabled()) {
            return Mage::getStoreConfig('widgets/checkout/redirect');
        }
        
        return false;
    }

    public function getWidgetCustomCSS()
    {
        if ($this->isEnabled()) {
            return Mage::getStoreConfig('widgets/openpaycustomcss/addcustomcss');
        }
        
        return false;
    }

    public function getMonthText()
    {
        if ($this->isCheckoutWidgetEnabled()) {
            $tiers = explode(',', $this->getTiers());
            $tiersmin = sizeof($tiers);
            if ($this->getRegion() == 'AU') {
                if ($tiersmin == 1) {
                    return $this->__('Spread the cost over <span>%s</span> months.', min($tiers));
                } else {
                    return $this->__('Spread the cost over <span>%s-%s</span> months.', min($tiers), max($tiers));
                }
            } else {
                if ($tiersmin == 1) {
                    return $this->__('Pay over <span>%s</span> interest free <br>monthly instalments.', min($tiers));
                } else {
                    return $this->__('Pay over <span>%s-%s</span> interest free <br>monthly instalments.', min($tiers), max($tiers));
                }
            }
        }
       

           return false;
    }
}
