<?php
namespace Dfe\Dragonpay\W;
use Dfe\Dragonpay\W\Event as Ev;
// 2017-08-16
/** @method Ev e() */
final class Nav extends \Df\PaypalClone\W\Nav {
	/**
	 * 2017-08-16
	 * @override
	 * @see \Df\PaypalClone\W\Nav::type()
	 * @used-by \Df\PaypalClone\W\Nav::id()
	 * @return string
	 */
	protected function type() {return dfc($this, function() {
		$s = $this->e()->status(); /** @var string $s */
		return 'S' === $s ? Ev::T_CAPTURE : (in_array($s, ['K', 'R']) ? Ev::T_REFUND : (
			'A' === $s ? Ev::T_AUTHORIZE : ('V' === $s ? Ev::T_VOID : Ev::T_INFO)
		))
	;});}
}