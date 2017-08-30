<?php
namespace Dfe\Dragonpay\W;
use Magento\Sales\Model\Order\Payment\Transaction as T;
/**
 * 2017-08-14
 * The response parameters are described in the part 5.2.1.2 «Response Parameters» (page 11)
 * of the PDF documentation: https://mage2.pro/t/4259
 * [Dragonpay] An example of a payment notification (postback): https://mage2.pro/t/4276
 */
final class Event extends \Df\PaypalClone\W\Event {
	/**
	 * 2017-08-14
	 * @override
	 * @see \Df\PaypalClone\W\Event::isSuccessful()
	 * @used-by \Df\Payment\W\Strategy\ConfirmPending::_handle()
	 * @return bool
	 */
	function isSuccessful() {return 'F' !== $this->status();}

	/**
	 * 2017-08-16 The type of the current transaction.
	 * 2017-08-17
	 * Currently, Dragonpay does not support the «Authorized», «Chargeback», «Refund» and «Void» responses:
	 * https://mage2.pro/t/4295
	 * https://mage2.pro/t/4297
	 * So I have removed support for these responses to make my code simplier.
	 * In future, if Dragonpay will support these responses,
	 * please the 0.2.1 version of my extension: https://github.com/mage2pro/dragonpay/tree/0.2.1
	 * It is the latest version with these reasponses support.
	 * @override
	 * @see \Df\PaypalClone\W\Event::ttCurrent()
	 * @used-by \Df\Payment\W\Strategy\ConfirmPending::_handle()
	 * @used-by \Df\PaypalClone\W\Nav::id()
	 */
	function ttCurrent() {return 'S' === $this->status() ? self::T_CAPTURE : self::T_INFO;}

	/**
	 * 2017-08-14 «A common reference number identifying this specific transaction from the PS side»
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_idE()
	 * @used-by \Df\PaypalClone\W\Event::idE()
	 * @return string
	 */
	protected function k_idE() {return 'refno';}

	/**
	 * 2017-08-14 «A unique id identifying this specific transaction from the merchant side»
	 * @override
	 * @see \Df\Payment\W\Event::k_pid()
	 * @used-by \Df\Payment\W\Event::pid()
	 * @return string
	 */
	protected function k_pid() {return 'txnid';}

	/**
	 * 2017-08-14 «A sha1 checksum digest of the parameters along with the secret key»
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_signature()
	 * @used-by \Df\PaypalClone\W\Event::signatureProvided()
	 * @return string
	 */
	protected function k_signature() {return 'digest';}

	/**
	 * 2017-08-14
	 * Note 1: «The result of the payment. Refer to Appendix 3 for codes.»
	 * Note 2 (Appendix 3):
	 * `A`: Authorized
	 * `F`: Failure
	 * `K`: Chargeback
	 * `P`: Pending
	 * `R`: Refund
	 * `S`: Success
	 * `U`: Unknown
	 * `V`: Void
	 * Note 3:
	 * «In cases wherein the transaction status returned is PENDING,
	 * the merchant may receive an asynchronous call to the postback URL in the future once the funding is completed.
	 * The format will just be similar to the HTTP GET callback described above. <...>
	 * The merchant should take care in checking the status
	 * and should only ship goods or render service when status value has become SUCCESS.»
	 *
	 * 2017-08-17
	 * Currently, Dragonpay does not support the «Authorized», «Chargeback», «Refund» and «Void» responses:
	 * https://mage2.pro/t/4295
	 * https://mage2.pro/t/4297
	 * So I have removed support for these responses to make my code simplier.
	 * In future, if Dragonpay will support these responses,
	 * please the 0.2.1 version of my extension: https://github.com/mage2pro/dragonpay/tree/0.2.1
	 * It is the latest version with these reasponses support.
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_status()
	 * @used-by \Df\PaypalClone\W\Event::status()
	 * @return string
	 */
	protected function k_status() {return 'status';}

	/**
	 * 2017-08-14
	 * «If status is SUCCESS, this should be the PG transaction reference number.
	 * If status is FAILURE, return one of the error codes described in Appendix 2.
	 * If status is PENDING, the message would be a reference number to complete the funding.»
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_statusT()
	 * @used-by \Df\PaypalClone\W\Event::logTitleSuffix()
	 * @return string|null
	 */
	protected function k_statusT() {return 'message';}
}