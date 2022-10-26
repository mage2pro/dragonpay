<?php
namespace Dfe\Dragonpay;
/**
 * 2017-04-11
 * 2017-08-12
 * Signature generation examples from an unofficial PHP SDK:
 * 1) for request:
 * https://github.com/CoreProc/dragonpay-sdk-php/blob/2.0.2/src/UrlGenerator/RestUrlGenerator.php#L48-L66
 * 2) for response:
 * https://github.com/CoreProc/dragonpay-sdk-php/blob/2.0.2/src/Transaction/RestTransaction.php#L68-L84
 * `[Dragonpay] An unofficial PHP SDK`: https://mage2.pro/t/3663
 * @see \Dfe\Dragonpay\Signer\Request
 * @see \Dfe\Dragonpay\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-11
	 * @used-by self::sign()
	 * @see \Dfe\Dragonpay\Signer\Request::values()
	 * @see \Dfe\Dragonpay\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();

	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @used-by \Df\PaypalClone\Signer::_sign()
	 * @return string
	 */
	final protected function sign() {return sha1(implode(':', array_merge($this->values(), [
		$this->s()->privateKey()
	])));}
}