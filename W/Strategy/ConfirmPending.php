<?php
namespace Dfe\Dragonpay\W\Strategy;
use Dfe\Dragonpay\W\Event as E;
/**
 * 2019-05-07
 * @used-by \Dfe\Dragonpay\W\Handler::strategyC()
 * @method E e()
 */
final class ConfirmPending extends \Df\Payment\W\Strategy\ConfirmPending {
	/**
	 * 2019-07-05
	 * 1) "Provide an ability to store intermediate responses
	 * for the `Df\Payment\W\Strategy\ConfirmPending` strategy": https://github.com/mage2pro/core/issues/86
	 * 2) "Show the `refno` value on the backend order screen for not yet paid orders":
	 * https://github.com/mage2pro/dragonpay/issues/7
	 * 3) The default value is false for backward compatibility.
	 * @override
	 * @see \Df\Payment\W\Strategy\ConfirmPending::storeIntermediateResponses()
	 * @used-by \Df\Payment\W\Strategy\ConfirmPending::_handle()
	 */
	protected function storeIntermediateResponses():bool {return true;}
}