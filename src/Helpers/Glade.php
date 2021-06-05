<?php


namespace Ahless\GladeBankTransfer\Helpers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Glade
{

	private Client $client;

	/**
	 * Glade constructor.
	 * Initialize GuzzleHttp Client
	 * @param $merchant_id
	 * @param $merchant_key
	 * @param $base_url
	 */
	public function __construct($merchant_id, $merchant_key, $base_url)
	{
		$headers = [
			'mid' => $merchant_id,
			'key' => $merchant_key
		];

		$this->client = new Client([
			'url' => $base_url
		]);
		$this->client = new Client([
			'Content-Type' => 'application/json',
			'base_uri' => $base_url,
			'headers' => $headers
		]);

	}

	/**
	 * Send Requests to Glade API
	 * @param array $payload
	 * @param string $method
	 * @param string $url
	 * @param string $action
	 * @return array
	 */
	public function sendRequest(array $payload, string $method, string $url, string $action): array
	{
		try {
			$response = $this->client->request($method, $url . $action, [
				'body' => json_encode($payload)
			]);

			return json_decode($response->getBody(), true);
		} catch (GuzzleException $e) {
			// throw exception
			return [
				'code' => $e->getCode(),
				'error' => $e->getMessage(),
			];
		}

	}
}