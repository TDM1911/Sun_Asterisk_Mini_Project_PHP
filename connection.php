<?php

class DB
{
	private static $instance = NULL;

	public static function getInstace()
	{
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host = localhost;dbname = mini_project','root', '');
				self::$instance->exec("SET NAMES 'utf8'");
			}
			catch (PDOException $ex) {
				die($ex->getMessage());
			}
		}
		return self::$instance;
	}
}
