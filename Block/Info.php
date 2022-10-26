<?php
namespace Dfe\Dragonpay\Block;
use Df\PaypalClone\W\Event as E;
# 2017-04-11
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Info extends \Df\Payment\Block\Info {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Block\Info::prepare()
	 * @used-by self::prepareUnconfirmed()
	 * @used-by \Df\Payment\Block\Info::prepareToRendering()
	 */
	final protected function prepare() {
		/**
		 * 2019-07-05
		 * 1) "Show the `refno` value on the backend order screen for paid orders":
		 * https://github.com/mage2pro/dragonpay/issues/6
		 * 2) All these methods return `null` when a backend user clicks the «Invoice» backend button
		 * for an order in the «Pending» state:
		 * @see \Df\Payment\Block\Info::e()
		 * @see \Df\Payment\TM::responseF()
		 * @see \Df\Payment\TM::responseL()
		 * It is similar to https://github.com/mage2pro/ipay88/issues/8
		 * @see \Dfe\IPay88\Block\Info::prepare()
		 * https://github.com/mage2pro/ipay88/blob/1.6.1/Block/Info.php#L17-L24
		 */
		if ($e = $this->tm()->responseL()) { /** @var E $e */
			$this->siEx('refno', $e->r('refno'));
		}
	}

	/**
	 * 2019-07-05
	 * @override
	 * @see \Df\Payment\Block\Info::prepareUnconfirmed()
	 * @used-by \Df\Payment\Block\Info::prepareToRendering()
	 */
	final protected function prepareUnconfirmed() {
		$this->prepare();
		parent::prepareUnconfirmed();
	}
}