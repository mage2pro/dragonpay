<?php
namespace Dfe\Dragonpay\Signer;
# 2017-04-11
final class Response extends \Dfe\Dragonpay\Signer {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Dfe\Dragonpay\Signer::values()
	 * @used-by \Dfe\Dragonpay\Signer::sign()
	 * @return string[]
	 */
	protected function values():array {return $this->v(['txnid', 'refno', 'status', 'message']);}
}