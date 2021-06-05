<?php

namespace Ahless\GladeBankTransfer;

use Ahless\GladeBankTransfer\Helpers\Glade;

class GladeBankTransfer
{
	private Glade $glade;

	public function __construct($merchant_id, $merchant_key, $base_url)
	{
		$this->glade = new Glade($merchant_id, $merchant_key, $base_url);
	}

	/**
	 * The bank transfer payment option allows your customers to make payment by bank transfers.
	 * @param string $amount
	 * @param array|null $user
	 * @return array
	 */
	public function bankTransfer(string $amount, ?array $user = null): array
	{
		$payload = [
			'action' => 'charge',
			'paymentType' => 'bank_transfer',
			'amount' => $amount,
			'user' => $user
		];

		return $this->glade->sendRequest($payload, 'POST', '/', 'payment');

	}

	/**
	 * The transaction can be verified by passing the transaction reference and setting the action as verify.
	 * @param string $txnRef
	 * @return array
	 */
	public function verifyPayment(string $txnRef): array
	{
		$payload = [
			"action" => "verify",
			"txnRef" => $txnRef

		];

		return $this->glade->sendRequest($payload, 'POST', '/', 'payment');
	}
}
