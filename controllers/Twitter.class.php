<?php

/**
 * Twitter.class.php
 * Description:
 *
 */

class Twitter
{
	private $_twitter;

	public function __construct($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret)
	{
		require_once dirname(__FILE__) . '/../Twitter/oauthdamnit.php';
		$this->_twitter = new OAuthDamnit($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
	}

	public function tweet($tweet)
	{
		return $this->_twitter->post('https://api.twitter.com/1.1/statuses/update.json', $tweet);
	}
}