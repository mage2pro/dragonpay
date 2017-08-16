<?php
namespace Dfe\Dragonpay\W;
use Df\Framework\Controller\Result\Text;
use Df\Payment\W\Strategy\ConfirmPending;
use Df\Payment\W\Strategy\Refund;
use Magento\Sales\Model\Order\Payment\Transaction as T;
// 2017-08-14
final class Handler extends \Df\PaypalClone\W\Handler implements \Df\Payment\W\IRefund {
	/**
	 * 2017-08-16 В валюте заказа (платежа), в формате платёжной системы (копейках).
	 * @todo It is not implemented yet.
	 * @override
	 * @see \Df\Payment\W\IRefund::amount()
	 * @used-by \Df\Payment\W\Strategy\Refund::_handle()
	 * @return int
	 */
	function amount() {return null;}

	/**
	 * 2017-08-16
	 * @todo It is not implemented yet.
	 * Метод должен вернуть идентификатор операции (не платежа!) в платёжной системе.
	 * Он нужен нам для избежания обработки оповещений о возвратах, инициированных нами же
	 * из административной части Magento: @see \Df\StripeClone\Method::_refund()
	 * Это должен быть тот же самый идентификатор,
	 * который возвращает @see \Dfe\Stripe\Facade\Refund::transId()
	 * @override
	 * @see \Df\Payment\W\IRefund::eTransId()
	 * @used-by \Df\Payment\W\Strategy\Refund::_handle()
	 * @return string
	 */
	function eTransId() {return null;}

	/**
	 * 2017-08-14
	 * «The postback URL handler should return with a simple `content-type:text/plain`
	 * containing only the single line: `result=OK`.»
	 * Part 5.2.1.2 «Response Parameters» (page 11) of the PDF documentation: https://mage2.pro/t/4259
	 * @override
	 * @see \Df\Payment\W\Handler::result()
	 * @used-by \Df\Payment\W\Handler::handle()
	 * @return Text
	 */
	protected function result() {return Text::i('result=OK');}

	/**
	 * 2017-08-16
	 * @override
	 * @see \Df\Payment\W\Handler::strategyC()
	 * @used-by \Df\Payment\W\Handler::handle()
	 */
	protected function strategyC() {$t = $this->e()->ttCurrent(); /** @var string $t */ return
		T::TYPE_REFUND === $t ? Refund::class : (T::TYPE_VOID === $t ? null : ConfirmPending::class)
	;}
}