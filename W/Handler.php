<?php
namespace Dfe\Dragonpay\W;
# 2019-05-07
final class Handler extends \Df\Payment\W\Handler {
	/**
	 * 2019-05-07
	 * @override
	 * @see \Df\Payment\W\Handler::strategyC()
	 * @used-by \Df\Payment\W\Handler::handle()
	 */
	protected function strategyC():string {return \Dfe\Dragonpay\W\Strategy\ConfirmPending::class;}
}