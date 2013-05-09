<?php

/**
 * MySQLConnect.php
 * Description:
 *
 */

class MySQLConnect
{
	private $_host;
	private $_user;
	private $_pass;
	private $_database;

	protected $result;

	public $db;

	public function __construct($host, $user, $pass, $database)
	{
		$this->_host = $host;
		$this->_user = $user;
		$this->_pass = $pass;
		$this->_database = $database;

		$this->db = mysql_connect($this->_host, $this->_user, $this->_pass) or die ('Cannot connect to the database because: ' . mysql_error());
		self::changeDatabase($this->_database);
	}

	public function changeConnection($host, $user, $pass, $database)
	{
		self::close();

		$this->_host = $host;
		$this->_user = $user;
		$this->_pass = $pass;
		$this->_database = $database;

		$this->db = mysql_connect($this->_host, $this->_user, $this->_pass) or die ('Cannot connect to the database because:: ' . mysql_error());
		self::changeDatabase($this->_database);
	}

	public function changeDatabase($database)
	{
		mysql_select_db($database);
	}

	public function close()
	{
		mysql_close($this->db);
	}
}
