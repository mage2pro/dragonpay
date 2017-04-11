<?php
namespace Dfe\Dragonpay;
/**
 * 2017-04-11
 * @see \Dfe\Dragonpay\Signer\Request
 * @see \Dfe\Dragonpay\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-11
	 * @used-by sign()
	 * @see \Dfe\Dragonpay\Signer\Request::values()
	 * @see \Dfe\Dragonpay\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();

	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @return string
	 */
	final protected function sign() {return implode($this->values());}
}