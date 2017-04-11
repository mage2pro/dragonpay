<?php
namespace Dfe\Dragonpay;
// 2017-04-11
final class Method extends \Df\PaypalClone\Method {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}
}