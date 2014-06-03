<?php

/**
 * MySQLConnect.php
 * Description:
 *
 */

class MongoDBConnect
{
	private $_username;
	private $_password;
	private $_server;
	private $_databaseName;
	private $_collectionName;
	private $_connection;
	private $_database;
	private $_collection;

	public function __construct($username, $password, $server, $databaseName, $collectionName)
	{
		$this->_username = $username;
		$this->_password = $password;
		$this->_server = $server;
		$this->_databaseName = $databaseName;
		$this->_collectionName = $collectionName;

		try {
			$this->_connection = new MongoClient("mongodb://$this->_username:$this->_password@$this->_server/$this->_databaseName");
			$this->_database = $this->_connection->$databaseName;
			$this->_collection = $this->_database->$collectionName;
		} catch (MongoConnectionException $e) {
			die('Error connecting to MongoDB server: ' . $e->getMessage());
		} catch (MongoException $e) {
			die('Error: ' . $e->getMessage());
		}
	}

	public function changeConnection($username, $password, $server, $database)
	{
		$this->_connection->close(true);

		$this->_username = $username;
		$this->_password = $password;
		$this->_server = $server;
		$this->_databaseName = $database;

		try {
			$this->_connection = new MongoClient("mongodb://$this->_username:$this->_password@$this->_server/$this->_databaseName");
		} catch (MongoConnectionException $e) {
			die('Error connecting to MongoDB server: ' . $e->getMessage());
		} catch (MongoException $e) {
			die('Error: ' . $e->getMessage());
		}
	}

	public function changeDatabase($databaseName)
	{
		$this->_databaseName = $databaseName;
		$this->_database = $this->_connection->$databaseName;
	}

	public function changeCollection($collectionName)
	{
		$this->_collectionName = $collectionName;
		$this->_collection = $this->_databaseName->$collectionName;
	}

	public function close()
	{
		$this->_connection->close(true);
	}

	public function getConnection()
	{
		return $this->_connection;
	}

	public function getDatabase()
	{
		return $this->_database;
	}

	public function getCollection()
	{
		return $this->_collection;
	}
}
