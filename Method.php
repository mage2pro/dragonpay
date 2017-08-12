<?php
namespace Dfe\Dragonpay;
// 2017-04-11
final class Method extends \Df\PaypalClone\Method {
	/**
	 * 2017-08-12
	 * The amount format is «Numeric(12,2)».
	 * It is specified in the Chapter 5.2.1.1 «Request Parameters» (page 9) of the PDF documentation:
	 * https://mage2.pro/t/4259
	 * @override
	 * @see \Df\Payment\Method::amountFactor()
	 * @used-by \Df\Payment\Method::amountFormat()
	 * @used-by \Df\Payment\Method::amountParse()
	 * @return int
	 */
	protected function amountFactor() {return 1;}

	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}
}