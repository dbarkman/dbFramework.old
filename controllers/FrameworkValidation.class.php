<?php

/**
 * FrameworkValidation.class.php
 * Description:
 *
 */

class FrameworkValidation extends Validation
{

	public function __construct()
	{
        parent::__construct();
	}

	public function sanitizeAPIKey($input)
	{
		return parent::sanitizeAlphanums($input);
	}

	public function sanitizeCategory($input)
	{
		return parent::sanitizeTextWithSpace($input);
	}

	public function validateAPIKey($input)
	{
		//validate API Integers
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 32) != null) {
				$error = 'Short';
			} else {
				if (parent::checkIllegal($input) != null) {
					$error = 'Illegal';
				} else {
					if (parent::checkAPIKey($input) != null) {
						$error = 'Invalid';
					}
				}
			}
		}
		return $error;
	}

	public function validateCategory($input)
	{
		//validate API Integers
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 1) != null) {
				$error = 'Short';
			} else {
				if (parent::checkIllegal($input) != null) {
					$error = 'Illegal';
				} else {
					if (parent::checkTextWithSpace($input) != null) {
						$error = 'Invalid';
					}
				}
			}
		}
		return $error;
	}
}
