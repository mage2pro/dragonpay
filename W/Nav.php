<?php
namespace Dfe\Dragonpay\W;
// 2017-08-16
/** @method \Dfe\Dragonpay\W\Event e() */
final class Nav extends \Df\PaypalClone\W\Nav {
	/**
	 * 2017-08-16
	 * @override
	 * @see \Df\PaypalClone\W\Nav::type()
	 * @used-by \Df\PaypalClone\W\Nav::id()
	 * @return string
	 */
	protected function type() {return $this->e()->needChangePaymentState() ? 'capture' : 'info';}
}