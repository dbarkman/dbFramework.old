<?php

/**
 * Curl.class.php
 * Description:
 *
 */

class Curl
{
	private $_logger;

	public function __construct($logger)
	{
		$this->_logger = $logger;
	}

	protected function runCurl($requestMethod, $url)
	{
		$ch = curl_init();
		if ($requestMethod === 'GET') curl_setopt($ch, CURLOPT_HTTPGET, 1);
		if ($requestMethod === 'POST') curl_setopt($ch, CURLOPT_POST, 1);
		if ($requestMethod === 'PUT') curl_setopt($ch, CURLOPT_PUT, 1);
		if ($requestMethod === 'DELETE') curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
}