<?php

/**
 * SendEmail.class.php
 * Description:
 *
 */

class SendEmail
{
	protected static function send($address, $subject, $message)
	{
		return mail($address, $subject, $message);
	}
}