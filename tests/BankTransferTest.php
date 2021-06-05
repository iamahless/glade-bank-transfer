<?php


namespace Ahless\GladeBankTransfer\Tests;

use Ahless\GladeBankTransfer\GladeBankTransfer;
use PHPUnit\Framework\TestCase;

class BankTransferTest extends TestCase
{
	/** @test */
	public function can_make_bank_transfer()
	{
		$bankTransfer = new GladeBankTransfer('GP0000001', '123456789', 'https://demo.api.gladepay.com');
		$response = $bankTransfer->bankTransfer('5000', null);

		$this->assertArrayHasKey('status', $response);
		$this->assertArrayHasKey('txnRef', $response);
		$this->assertArrayHasKey('bankName', $response);
		$this->assertArrayHasKey('accountNumber', $response);
		$this->assertArrayHasKey('accountName', $response);
		$this->assertArrayHasKey('bankName', $response);
		$this->assertArrayHasKey('message', $response);
		$this->assertArrayHasKey('auth_type', $response);
	}

	/** @test */
	public function can_verify_bank_payment()
	{
		$bankTransfer = new GladeBankTransfer('GP0000001', '123456789', 'https://demo.api.gladepay.com');
		$response = $bankTransfer->bankTransfer('5000', null);

		$verify_payment_response = $bankTransfer->verifyPayment($response['txnRef']);

		$this->assertArrayHasKey('status', $verify_payment_response);
		$this->assertArrayHasKey('txnStatus', $verify_payment_response);
		$this->assertArrayHasKey('txnRef', $verify_payment_response);
		$this->assertArrayHasKey('message', $verify_payment_response);
		$this->assertArrayHasKey('chargedAmount', $verify_payment_response);
		$this->assertArrayHasKey('payment_method', $verify_payment_response);
		$this->assertArrayHasKey('fullname', $verify_payment_response);
		$this->assertArrayHasKey('email', $verify_payment_response);
		$this->assertArrayHasKey('bank_message', $verify_payment_response);
	}
}