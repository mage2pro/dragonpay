<?php
namespace Dfe\Dragonpay\Init;
// 2017-04-11
/** @method \Dfe\Dragonpay\Method m() */
final class Action extends \Df\PaypalClone\Init\Action {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Init\Action::redirectUrl()
	 * @used-by \Df\Payment\Init\Action::action()
	 * @return string
	 */
	protected function redirectUrl() {return '';}
}