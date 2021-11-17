jQuery(document).ready(function($){
	var element = $('opy-product-page');
	var product_type = element.attr('product-type');

	$(document).ready(function($) {
		updatePrice();
		var priceSelector = $('form#product_addtocart_form .price-box');
		priceSelector.bind("DOMSubtreeModified", updatePrice);

		function updatePrice()
		{
			if (product_type == "bundle") {
				var bundleConfPrice = $("form#product_addtocart_form .price-box > .price-as-configured .price").text();
				bundleConfPrice = bundleConfPrice.match(/[\d\.]+/g);
				if (parseFloat(bundleConfPrice) > 0) {
					var priceTxt = $("form#product_addtocart_form .price-box > .price-as-configured .price").text();
				} else {
					var priceTxt = $("form#product_addtocart_form .price-box > .price-from").text();
				}
				
			} else if ($("[data-price-type=finalPrice]:first").text() != "") {
				var priceTxt = $("[data-price-type=finalPrice]:first").text();
			} else {
				var priceTxt = $('form#product_addtocart_form .price-box > span.regular-price').text();
			}

			console.log(priceTxt);
			
			var actualPrice = priceTxt.match(/[\d\.]+/g);
		
			if(actualPrice != null){
				if (actualPrice[1]) {
					//variantPrice = actualPrice[0] + actualPrice[1];
					variantPrice = actualPrice[1];
				} else {
					variantPrice = actualPrice[0];
				}

				var price = parseFloat(Math.round(variantPrice * 100) / 100); console.log(price);

				element.attr('amount', price);
			}
		}
	});
});