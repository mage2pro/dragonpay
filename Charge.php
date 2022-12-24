<?php
namespace Dfe\Dragonpay;
/**
 * 2017-08-12
 * The charge parameters are described in the Chapter 5.2.1.1 «Request Parameters» (page 9)
 * of the PDF documentation: https://mage2.pro/t/4259
 * @method Method m()
 * @method Settings s()
 */
final class Charge extends \Df\PaypalClone\Charge {
	/**
	 * 2017-08-12 «The amount to get from the end-user (XXXX.XX). Numeric(12,2).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_Amount()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_Amount():string {return 'amount';}

	/**
	 * 2017-08-12 «The currency of the amount. Char(3).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_Currency()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_Currency():string {return 'ccy';}

	/**
	 * 2017-08-12 «Email address of customer. Varchar(40).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_Email()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_Email():string {return 'email';}

	/**
	 * 2017-08-12 «A unique code assigned to Merchant. Varchar(20).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_MerchantId()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_MerchantId():string {return 'merchantid';}

	/**
	 * 2017-08-12 «A unique id identifying this specific transaction from the merchant side. Varchar(40).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_RequestId()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_RequestId():string {return 'txnid';}

	/**
	 * 2017-08-12 «A sha1 checksum digest of all the parameters along with the secret key. Char(40).»
	 * @override
	 * @see \Df\PaypalClone\Charge::k_Signature()
	 * @used-by \Df\PaypalClone\Charge::p()
	 */
	protected function k_Signature():string {return 'digest';}

	/**
	 * 2017-08-12
	 * @override
	 * @see \Df\PaypalClone\Charge::pCharge()
	 * @used-by \Df\PaypalClone\Charge::p()
	 * @return array(string => mixed)
	 */
	protected function pCharge():array {return [
		/**
		 * 2017-08-12
		 * Note 1: «A brief description of what the payment is for. Varchar(128).»
		 * Note 2: As I understand, the value is required because it is used in the request signature generation:
		 * @see \Dfe\Dragonpay\Signer\Request::values()
		 * 2017-09-04
		 * `[Dragonpay] The maximum length of a payment description (the «description» parameter)
		 * is 128 characters`: https://mage2.pro/t/4457
		 */
		'description' => $this->description()
	];}
}