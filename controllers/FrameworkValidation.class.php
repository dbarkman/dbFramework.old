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

	public function sanitizeUUID($input)
	{
		return parent::sanitizeUUID($input);
	}

	public function sanitizeInteger($input)
	{
		return parent::sanitizeInteger($input);
	}

	public function sanitizeFloat($input)
	{
		return parent::sanitizeFloat($input);
	}

	public function sanitizeTextWithSpace($input)
	{
		return parent::sanitizeTextWithSpace($input);
	}

	public function sanitizeMachineName($input)
	{
		return parent::sanitizeMachineName($input);
	}

	public function sanitizeSentence($input)
	{
		return parent::sanitizeSentence($input);
	}

	public function sanitizeEmail($input)
	{
		return parent::sanitizeEmail($input);
	}

	public function sanitizeCategory($input)
	{
		return parent::sanitizeTextWithSpace($input);
	}

	public function validateAPIKey($input)
	{
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

	public function validateTextWithSpace($input)
	{
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

	public function validateInteger($input)
	{
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
					if (parent::checkInteger($input) != null) {
						$error = 'Invalid';
					}
				}
			}
		}
		return $error;
	}

	public function validateFloat($input)
	{
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
					if (parent::checkFloat($input) != null) {
						$error = 'Invalid';
					}
				}
			}
		}
		return $error;
	}

	public function validateVersionNumber($input)
	{
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
					if (parent::checkVersionNumber($input) != null) {
						$error = 'Invalid';
					}
				}
			}
		}
		return $error;
	}

	public function validateUUID($input)
	{
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 36) != null) {
				$error = 'Short';
			} else {
				if (parent::checkUUID($input) != null) {
					$error = 'Invalid';
				}
			}
		}
		return $error;
	}

	public function validateMachineName($input)
	{
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 1) != null) {
				$error = 'Short';
			} else {
				if (parent::checkMachineName($input) != null) {
					$error = 'Invalid';
				}
			}
		}
		return $error;
	}

	public function validateSentence($input)
	{
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 1) != null) {
				$error = 'Short';
			} else {
				if (parent::checkSentence($input) != null) {
					$error = 'Invalid';
				}
			}
		}
		return $error;
	}

	public function validateEmail($input)
	{
		$error = '';

		if (parent::checkBlank($input) != null) {
			$error = 'Blank';
		} else {
			if (parent::checkLength($input, 6) != null) {
				$error = 'Short';
			} else {
				if (parent::checkEmail($input) != null) {
					$error = 'Invalid';
				}
			}
		}
		return $error;
	}
}
