<?php

class Conn
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'test';

		protected function connect(){
			//data source name
			$dsn = 'mysql:host='.$this->host.';dbname='. $this->db;
			//pdo connectiun
			$pdo = new PDO($dsn, $this->user, $this->password);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			return $pdo;
		}
}
