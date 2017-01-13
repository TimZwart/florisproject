<?php
require APP_FILEPATH.'controller_baseclass.php';
class admin extends controller_baseclass{
	function index(){
		$this->admin();
	}
	function admin(){
                $this->protected_loadview('admin');
//		if($this->logged_in()){
//			$this->loadview('admin');
//		}
//		else{
//			echo 'hi';
//			$this->loadview('login_page');
//		}
	}
	function process_login(){
                var_dump($_POST);
		$username = $this->sql_escape_string($_POST['username']);
                $password=$this->sql_escape_string($_POST['password']);
		$this->log_in($username, $password);
		$this->admin();
	}
}
?>
