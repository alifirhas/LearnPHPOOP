<?php

class Conn{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db = 'test';

	public function connect(){
		$dsn = "mysql:host=$this->host;dbname=$this->db";
		$pdo = new PDO($dsn, $this->user, $this->pass);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		// if ($pdo) {
		// 	echo "koneksi berhasil";
		// }else{
		// 	echo "koneksi tidak berhasil";
		// }
		return $pdo;
	}	
}