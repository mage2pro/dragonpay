<?php
namespace Dfe\Dragonpay\W;
use Df\Framework\W\Result\Text;
/**
 * 2017-08-17
 * Currently, Dragonpay does not support the «Authorized», «Chargeback», «Refund» and «Void» responses:
 * https://mage2.pro/t/4295
 * https://mage2.pro/t/4297
 * So I have removed support for these responses to make my code simplier.
 * In future, if Dragonpay will support these responses,
 * please the 0.2.1 version of my extension: https://github.com/mage2pro/dragonpay/tree/0.2.1
 * It is the latest version with these reasponses support.
 */
final class Responder extends \Df\Payment\W\Responder {
	/**
	 * 2017-08-14
	 * «The postback URL handler should return with a simple `content-type:text/plain`
	 * containing only the single line: `result=OK`.»
	 * Part 5.2.1.2 «Response Parameters» (page 11) of the PDF documentation: https://mage2.pro/t/4259
	 * @override
	 * @see \Df\Payment\W\Responder::success()
	 * @used-by \Df\Payment\W\Responder::get()
	 */
	protected function success():Text {return Text::i('result=OK');}
}