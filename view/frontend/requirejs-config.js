// 2019-05-29
var config = {config: {mixins: {
	// 2019-05-29
	// «Mageplaza One Step Checkout does not show the Dragonpay payment option to anonymous visitors
	// on the frontend checkout screen's initial load»: https://github.com/mage2pro/dragonpay/issues/5
	'Magento_Checkout/js/view/payment/list': {'Dfe_Dragonpay/payment-list': true}
}}};