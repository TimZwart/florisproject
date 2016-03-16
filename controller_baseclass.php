<?php
class controller_baseclass{
	private $db;
	function __construct(){
		$this->db = mysqli_connect("localhost", "root", "tyranids");
		$this->db->select_db('florisproject');
	}
	protected function db_query($querystring){
		$res  = mysqli_query($this->db, $querystring);
		if(!$res) die('db query failed'.$querystring);
	}
	protected function db_query_assoc($querystring){
		$res  = mysqli_query($this->db, $querystring);
		if(!$res) die('db query failed'.$querystring);
		$return = [];
		while($row = mysqli_fetch_assoc($res)){
			$return[] = $row;
		}
		return $return;
	}
	protected function sql_escape_string($string){
		return mysqli_real_escape_string($this->db, $string);
	}
	protected function loadview($view, $data=[]){
		require "views/$view.php";
	}
	protected function log_in($username, $password){
		$querystring = "select * from users where username='$username' and password='$password'";
		$res = $this->db_query_assoc($querystring);
		if(count($res) > 0){
			$_SESSION['logged_in'] = 'yes';
			return true;
		}
		return false;
	}
	protected function logged_in(){
		return isset($_SESSION['logged_in'])&&$_SESSION['logged_in']?true:false;
	}
}
?>
