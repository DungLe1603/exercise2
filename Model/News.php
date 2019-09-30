<?php

require('dbConnect.php');

class News extends Connect
{
	protected $conn;

	public function __construct() {
		$this->conn = $this->dbConnect();
	}

	public function __destruct() {
		$this->conn->close();
	}

	public function getAllNews ()
	{
		$sql = "SELECT * FROM news";
		$list = $this->conn->query($sql);
		return $list;
	}

	public function getNewsDetail($id)
	{
		$sql = "SELECT * FROM news where id = " . $id;
		$data = $this->conn->query($sql);
		$detail = $data->fetch_assoc();
		return $detail;
	}
}
?>
