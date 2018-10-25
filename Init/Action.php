<?php
namespace Dfe\Dragonpay\Init;
// 2017-04-11
/** @method \Dfe\Dragonpay\Method m() */
final class Action extends \Df\PaypalClone\Init\Action {
	/**
	 * 2018-10-25
	 * @override
	 * @see \Df\Payment\Init\Action::forceGet
	 * @used-by \Df\Payment\Init\Action::action()
	 * @see \Dfe\Qiwi\Init\Action::redirectMethod()
	 * @return bool
	 */
	protected function forceGet() {return true;}

	/**
	 * 2017-04-11
	 * 2017-08-11
	 * Note 1. These URL are specified on the page 8 of the API PDF documentation: https://mage2.pro/t/4259
	 * Note 2. Dragonpay does not support the HTTPS protocol in the test mode (I have checked it myself).
	 * @override
	 * @see \Df\Payment\Init\Action::redirectUrl()
	 * @used-by \Df\Payment\Init\Action::action()
	 * @return string
	 */
	protected function redirectUrl() {
		/** @var string $protocol */ /** @var string $subdomain */
		list($protocol, $subdomain) = $this->m()->test(['http', 'test'], ['https', 'gw']);
		return "$protocol://$subdomain.dragonpay.ph/Pay.aspx";
	}
}